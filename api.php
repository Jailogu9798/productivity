<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type');

require_once 'db_config.php';

$conn = getDBConnection();
$method = $_SERVER['REQUEST_METHOD'];
$endpoint = $_GET['endpoint'] ?? '';

switch ($method) {
    case 'GET':
        if ($endpoint === 'models') {
            getModels($conn);
        } elseif ($endpoint === 'times') {
            getTimeEntries($conn);
        }
        break;
        
    case 'POST':
        if ($endpoint === 'models') {
            createModel($conn);
        } elseif ($endpoint === 'times') {
            saveTimeEntries($conn);
        }
        break;
        
    case 'PUT':
        if ($endpoint === 'times') {
            updateTimeEntry($conn);
        }
        break;
        
    case 'DELETE':
        if ($endpoint === 'times') {
            deleteTimeEntry($conn);
        }
        break;
}

function getModels($conn) {
    $sql = "SELECT * FROM models ORDER BY model_code, bike_name";
    $result = $conn->query($sql);
    
    $models = [];
    while ($row = $result->fetch_assoc()) {
        $models[] = $row;
    }
    
    echo json_encode(['success' => true, 'data' => $models]);
}

function getTimeEntries($conn) {
    $date = $_GET['date'] ?? date('Y-m-d');
    $model_id = $_GET['model_id'] ?? null;
    
    $sql = "SELECT t.*, m.model_code, m.bike_name 
            FROM time_entries t
            JOIN models m ON t.model_id = m.id
            WHERE t.entry_date = ?";
    
    $params = [$date];
    $types = "s";
    
    if ($model_id) {
        $sql .= " AND t.model_id = ?";
        $params[] = $model_id;
        $types .= "i";
    }
    
    $sql .= " ORDER BY m.model_code, t.entry_type";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param($types, ...$params);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $entries = [];
    while ($row = $result->fetch_assoc()) {
        $entries[] = $row;
    }
    
    echo json_encode(['success' => true, 'data' => $entries]);
}

function createModel($conn) {
    $data = json_decode(file_get_contents('php://input'), true);
    
    if (!isset($data['model_code']) || !isset($data['bike_name'])) {
        echo json_encode(['success' => false, 'error' => 'Model code and bike name required']);
        return;
    }
    
    $stmt = $conn->prepare("INSERT INTO models (model_code, bike_name) VALUES (?, ?)");
    $stmt->bind_param("ss", $data['model_code'], $data['bike_name']);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'id' => $conn->insert_id]);
    } else {
        echo json_encode(['success' => false, 'error' => $conn->error]);
    }
}

function saveTimeEntries($conn) {
    $data = json_decode(file_get_contents('php://input'), true);
    
    if (!isset($data['entries']) || !is_array($data['entries'])) {
        echo json_encode(['success' => false, 'error' => 'Invalid entries format']);
        return;
    }
    
    $date = $data['date'] ?? date('Y-m-d');
    $conn->begin_transaction();
    
    try {
        $stmt = $conn->prepare("
            INSERT INTO time_entries (model_id, entry_type, ea, ms, va, fb, ps, entry_date)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)
            ON DUPLICATE KEY UPDATE
            ea = VALUES(ea),
            ms = VALUES(ms),
            va = VALUES(va),
            fb = VALUES(fb),
            ps = VALUES(ps)
        ");
        
        foreach ($data['entries'] as $entry) {
            $model_id = $entry['model_id'];
            $entry_type = $entry['entry_type'];
            $ea = $entry['ea'] ?? 0;
            $ms = $entry['ms'] ?? 0;
            $va = $entry['va'] ?? 0;
            $fb = $entry['fb'] ?? 0;
            $ps = $entry['ps'] ?? 0;
            
            $stmt->bind_param("isddddds", $model_id, $entry_type, $ea, $ms, $va, $fb, $ps, $date);
            $stmt->execute();
        }
        
        $conn->commit();
        echo json_encode(['success' => true, 'message' => 'Entries saved successfully']);
        
    } catch (Exception $e) {
        $conn->rollback();
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
}

function updateTimeEntry($conn) {
    $data = json_decode(file_get_contents('php://input'), true);
    
    if (!isset($data['id'])) {
        echo json_encode(['success' => false, 'error' => 'Entry ID required']);
        return;
    }
    
    $fields = [];
    $params = [];
    $types = "";
    
    $allowed = ['ea', 'ms', 'va', 'fb', 'ps'];
    foreach ($allowed as $field) {
        if (isset($data[$field])) {
            $fields[] = "$field = ?";
            $params[] = $data[$field];
            $types .= "d";
        }
    }
    
    if (empty($fields)) {
        echo json_encode(['success' => false, 'error' => 'No fields to update']);
        return;
    }
    
    $params[] = $data['id'];
    $types .= "i";
    
    $sql = "UPDATE time_entries SET " . implode(", ", $fields) . " WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param($types, ...$params);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'affected' => $stmt->affected_rows]);
    } else {
        echo json_encode(['success' => false, 'error' => $conn->error]);
    }
}

function deleteTimeEntry($conn) {
    $id = $_GET['id'] ?? null;
    
    if (!$id) {
        echo json_encode(['success' => false, 'error' => 'Entry ID required']);
        return;
    }
    
    $stmt = $conn->prepare("DELETE FROM time_entries WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'deleted' => $stmt->affected_rows]);
    } else {
        echo json_encode(['success' => false, 'error' => $conn->error]);
    }
}

$conn->close();
?>
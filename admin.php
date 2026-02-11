<?php
require_once 'db_config.php';
$conn = getDBConnection();

// Fetch all models for dropdown
$models_result = $conn->query("SELECT id, model_code, bike_name FROM models ORDER BY model_code");
$models = [];
while ($row = $models_result->fetch_assoc()) {
    $models[] = $row;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Motor Times - Admin</title>
    <style>
        body { font-family: Arial; margin: 20px; background: #f5f5f5; }
        .container { max-width: 1200px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; }
        .form-group { margin-bottom: 15px; }
        label { display: inline-block; width: 120px; font-weight: bold; }
        input, select { padding: 8px; border: 1px solid #ddd; border-radius: 4px; }
        button { padding: 10px 20px; background: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .success { background: #d4edda; color: #155724; padding: 10px; margin: 10px 0; border-radius: 4px; }
        .error { background: #f8d7da; color: #721c24; padding: 10px; margin: 10px 0; border-radius: 4px; }
    </style>
</head>
<body>

	<button><a href="index.php">MDU Index</a></button>
    <div class="container">

        <h1>🏍️ Motor Times - Admin Panel</h1>
        
        <div id="message"></div>
        
        <h2>Add New Model</h2>
        <form id="addModelForm">
            <div class="form-group">
                <label>Model Code:</label>
                <input type="text" name="model_code" required>
            </div>
            <div class="form-group">
                <label>Bike Name:</label>
                <input type="text" name="bike_name" required>
            </div>
            <button type="submit">Add Model</button>
        </form>
        
        <h2 style="margin-top: 40px;">Quick Save Times</h2>
        <form id="saveTimesForm">
            <div class="form-group">
                <label>Select Model:</label>
                <select name="model_id" required>
                    <option value="">Choose Model</option>
                    <?php foreach ($models as $model): ?>
                    <option value="<?= $model['id'] ?>">
                        <?= htmlspecialchars($model['model_code'] . ' - ' . $model['bike_name']) ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Entry Type:</label>
                <select name="entry_type" required>
                    <option value="CBU">CBU</option>
                    <option value="BRAZIL">Brazil</option>
                    <option value="ARGENTINA">Argentina</option>
                    <option value="COLOMBIA">Colombia</option>
                    <option value="THAILAND">Thailand</option>
                    <option value="NEPAL">Nepal</option>
                    <option value="BANGLADESH">Bangladesh</option>
                </select>
            </div>
            <div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 10px; margin-bottom: 20px;">
                <div><label>EA:</label> <input type="number" name="ea" step="0.1" value="0"></div>
                <div><label>MS:</label> <input type="number" name="ms" step="0.1" value="0"></div>
                <div><label>VA:</label> <input type="number" name="va" step="0.1" value="0"></div>
                <div><label>FB:</label> <input type="number" name="fb" step="0.1" value="0"></div>
                <div><label>PS:</label> <input type="number" name="ps" step="0.1" value="0"></div>
            </div>
            <button type="submit">Save Entry</button>
        </form>
    </div>
    
    <script>
        // Add Model
        document.getElementById('addModelForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            const data = {
                model_code: formData.get('model_code'),
                bike_name: formData.get('bike_name')
            };
            
            try {
                const response = await fetch('api.php?endpoint=models', {
                    method: 'POST',
                    headers: {'Content-Type': 'application/json'},
                    body: JSON.stringify(data)
                });
                const result = await response.json();
                
                if (result.success) {
                    showMessage('Model added successfully!', 'success');
                    setTimeout(() => location.reload(), 1500);
                } else {
                    showMessage('Error: ' + result.error, 'error');
                }
            } catch (error) {
                showMessage('Error: ' + error.message, 'error');
            }
        });
        
        // Save Times
        document.getElementById('saveTimesForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            
            const entry = {
                model_id: parseInt(formData.get('model_id')),
                entry_type: formData.get('entry_type'),
                ea: parseFloat(formData.get('ea')) || 0,
                ms: parseFloat(formData.get('ms')) || 0,
                va: parseFloat(formData.get('va')) || 0,
                fb: parseFloat(formData.get('fb')) || 0,
                ps: parseFloat(formData.get('ps')) || 0
            };
            
            try {
                const response = await fetch('api.php?endpoint=times', {
                    method: 'POST',
                    headers: {'Content-Type': 'application/json'},
                    body: JSON.stringify({
                        date: new Date().toISOString().split('T')[0],
                        entries: [entry]
                    })
                });
                const result = await response.json();
                
                if (result.success) {
                    showMessage('Time entry saved successfully!', 'success');
                    this.reset();
                } else {
                    showMessage('Error: ' + result.error, 'error');
                }
            } catch (error) {
                showMessage('Error: ' + error.message, 'error');
            }
        });
        
        function showMessage(msg, type) {
            const div = document.getElementById('message');
            div.className = type;
            div.textContent = msg;
            setTimeout(() => div.textContent = '', 3000);
        }
    </script>
</body>
</html>
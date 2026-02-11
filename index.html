<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motorcycle Assembly Time Matrix</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 30px;
            background-color: #f5f5f5;
        }
        
        .table-container {
            overflow-x: auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 20px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
            background: white;
        }
        
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: right;
        }
        
        th {
            background-color: #e0e0e0;  /* Lite gray for header */
            font-weight: 600;
            text-align: center;
        }
        
        tfoot td {
            background-color: #e8e8e8;  /* Lite gray for footer */
            font-weight: 600;
            border-top: 2px solid #ccc;
        }
        
        td:first-child, th:first-child,
        td:nth-child(2), th:nth-child(2) {
            text-align: left;
            font-weight: 500;
        }
        
        .model-col, .bike-col {
            background-color: #fafafa;
            position: sticky;
            left: 0;
        }
        
        .total-row {
            background-color: #d3d3d3;
            font-weight: 700;
        }
        
        input[type="number"] {
            width: 60px;
            padding: 4px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 12px;
            text-align: right;
        }
        
        input[type="number"]:focus {
            border-color: #4CAF50;
            outline: none;
            box-shadow: 0 0 5px rgba(76,175,80,0.3);
        }
        
        .total-display {
            font-weight: 700;
            color: #2c3e50;
            background-color: #f0f7f0;
        }
        
        .section-header {
            background-color: #c0c0c0;
            font-size: 14px;
        }
        
        .note {
            margin-top: 20px;
            padding: 10px;
            background-color: #fff3cd;
            border-left: 4px solid #ffc107;
        }
    </style>
</head>
<body>
    <h2>🏍️ Motorcycle Assembly Time Matrix - Function Wise Analysis</h2><button><a href="admin.php"> Admin Panel</a></button> <button><a href="workcontent.html"> Work Content</a></button>
    <div class="table-container">
        <table id="timeMatrix">
            <thead>
                <tr>
                    <th rowspan="2">Model</th>
                    <th rowspan="2">Bike</th>
                    <th colspan="6">FUNCTION WISE CBU</th>
                    <th rowspan="2">Total Time (CBU)</th>
                    <th colspan="6">FUNCTION WISE CKD - BRAZIL</th>
                    <th rowspan="2">Total Time (BRAZIL)</th>
                    <th colspan="6">FUNCTION WISE CKD - ARGENTINA</th>
                    <th rowspan="2">Total Time (ARGENTINA)</th>
                    <th colspan="6">FUNCTION WISE CKD - COLOMBIA</th>
                    <th rowspan="2">Total Time (COLOMBIA)</th>
                    <th colspan="6">FUNCTION WISE CKD - THAILAND</th>
                    <th rowspan="2">Total Time (THAILAND)</th>
                    <th colspan="6">FUNCTION WISE CKD - NEPAL</th>
                    <th rowspan="2">Total Time (NEPAL)</th>
                    <th colspan="6">FUNCTION WISE CKD - BANGLADESH</th>
                    <th rowspan="2">Total Time (BANGLADESH)</th>
                </tr>
                <tr>
                    <!-- CBU -->
                    <th>EA</th><th>MS</th><th>VA</th><th>FB</th><th>PS</th><th>Total</th>
                    <!-- Brazil -->
                    <th>EA</th><th>MS</th><th>VA</th><th>FB</th><th>PS</th><th>Total</th>
                    <!-- Argentina -->
                    <th>EA</th><th>MS</th><th>VA</th><th>FB</th><th>PS</th><th>Total</th>
                    <!-- Colombia -->
                    <th>EA</th><th>MS</th><th>VA</th><th>FB</th><th>PS</th><th>Total</th>
                    <!-- Thailand -->
                    <th>EA</th><th>MS</th><th>VA</th><th>FB</th><th>PS</th><th>Total</th>
                    <!-- Nepal -->
                    <th>EA</th><th>MS</th><th>VA</th><th>FB</th><th>PS</th><th>Total</th>
                    <!-- Bangladesh -->
                    <th>EA</th><th>MS</th><th>VA</th><th>FB</th><th>PS</th><th>Total</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data rows will be populated here -->
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2"><strong>GRAND TOTAL</strong></td>
                    <td colspan="5"></td>
                    <td id="grandTotalCBU">0.0</td>
                    <td colspan="5"></td>
                    <td id="grandTotalBrazil">0.0</td>
                    <td colspan="5"></td>
                    <td id="grandTotalArgentina">0.0</td>
                    <td colspan="5"></td>
                    <td id="grandTotalColombia">0.0</td>
                    <td colspan="5"></td>
                    <td id="grandTotalThailand">0.0</td>
                    <td colspan="5"></td>
                    <td id="grandTotalNepal">0.0</td>
                    <td colspan="5"></td>
                    <td id="grandTotalBangladesh">0.0</td>
                </tr>
            </tfoot>
        </table>
    </div>
    
    

    <script>
        // Sample data from image
        const modelData = [
            // Format: [Model, Bike, CBU_EA, CBU_MS, CBU_VA, CBU_FB, CBU_PS, Brazil_EA, Brazil_MS, Brazil_VA, Brazil_FB, Brazil_PS, Arg_EA, Arg_MS, Arg_VA, Arg_FB, Arg_PS, Col_EA, Col_MS, Col_VA, Col_FB, Col_PS, Thai_EA, Thai_MS, Thai_VA, Thai_FB, Thai_PS, Nepal_EA, Nepal_MS, Nepal_VA, Nepal_FB, Nepal_PS, Bang_EA, Bang_MS, Bang_VA, Bang_FB, Bang_PS]
            ["UCE", "Bullet 350", 55.9, 70.2, 105.0, 95.2, 169.0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0],
            ["J1D", "Meteor", 56.8, 97.7, 92.3, 64.2, 105.1, 416.1, 559.6, 907.7, 288.0, 64.2, 105.1, 610.6, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0],
            ["J1A", "Old Classic", 57.9, 94.8, 95.3, 64.2, 133.5, 445.7, 639.1, 633.4, 633.4, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0],
            ["J1A3", "New Classic (VVL)", 57.9, 94.8, 96.3, 64.2, 149.4, 462.6, 639.1, 633.4, 633.4, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0],
            ["J1A3", "New Classic (ORG)", 64.0, 94.8, 100.2, 64.2, 168.6, 491.8, 639.1, 633.4, 633.4, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0],
            ["J1C", "Hunter (ORG)", 64.0, 96.0, 106.8, 58.6, 135.1, 460.5, 622.3, 624.7, 604.7, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0],
            ["J1C", "Hunter (VVL)", 56.8, 96.0, 110.2, 58.6, 123.4, 445.0, 622.3, 624.7, 604.7, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0],
            ["J1C5", "New Hunter", 64.0, 96.0, 106.8, 58.6, 144.4, 469.8, 605.1, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0],
            ["J1B", "Bullet", 56.8, 94.8, 96.4, 64.2, 158.3, 470.5, 658.9, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0],
            ["J1B", "Bullet Gold", 56.8, 94.8, 95.6, 64.2, 152.1, 463.5, 657.7, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0],
            ["J1H", "Goan Classic", 57.9, 96.4, 101.6, 64.2, 163.5, 483.7, 603.0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0],
            ["D3H", "Himalayan", 79.2, 94.8, 152.9, 207.0, 251.0, 784.9, 911.8, 908.5, 903.0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0],
            ["D3K", "Scram", 79.2, 94.8, 157.0, 224.0, 169.0, 724.0, 854.6, 849.4, 843.3, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0],
            ["D4K", "New Scram", 81.1, 100.3, 157.1, 224.0, 171.6, 734.1, 760.0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0],
            ["K1G", "New Himalayan", 132.0, 114.5, 175.4, 81.0, 154.5, 657.4, 747.2, 720.0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0],
            ["K1F", "Guerrilla", 132.0, 114.5, 181.1, 81.0, 114.0, 622.6, 706.7, 719.5, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0],
            ["P1E", "Twins", 109.1, 140.8, 184.5, 81.0, 131.5, 646.9, 700.5, 712.4, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0],
            ["P4D", "Super Meteor", 109.2, 140.7, 192.0, 74.0, 168.7, 684.6, 764.6, 781.6, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0],
            ["P4M", "Shotgun 650", 109.2, 140.7, 195.7, 74.0, 222.1, 741.8, 825.0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0, 0,0,0,0,0]
        ];

        function calculateTotal(inputs) {
            let sum = 0;
            inputs.forEach(input => {
                let val = parseFloat(input.value);
                if (!isNaN(val)) sum += val;
            });
            return sum;
        }

        function updateRowTotals(row) {
            // CBU Total
            let cbuInputs = [
                row.querySelector('.cbu-ea'), 
                row.querySelector('.cbu-ms'), 
                row.querySelector('.cbu-va'), 
                row.querySelector('.cbu-fb'), 
                row.querySelector('.cbu-ps')
            ];
            row.querySelector('.total-cbu').textContent = calculateTotal(cbuInputs).toFixed(1);
            
            // Brazil Total
            let brazilInputs = [
                row.querySelector('.brazil-ea'), 
                row.querySelector('.brazil-ms'), 
                row.querySelector('.brazil-va'), 
                row.querySelector('.brazil-fb'), 
                row.querySelector('.brazil-ps')
            ];
            row.querySelector('.total-brazil').textContent = calculateTotal(brazilInputs).toFixed(1);
            
            // Argentina Total
            let argInputs = [
                row.querySelector('.arg-ea'), 
                row.querySelector('.arg-ms'), 
                row.querySelector('.arg-va'), 
                row.querySelector('.arg-fb'), 
                row.querySelector('.arg-ps')
            ];
            row.querySelector('.total-arg').textContent = calculateTotal(argInputs).toFixed(1);
            
            // Colombia Total
            let colInputs = [
                row.querySelector('.col-ea'), 
                row.querySelector('.col-ms'), 
                row.querySelector('.col-va'), 
                row.querySelector('.col-fb'), 
                row.querySelector('.col-ps')
            ];
            row.querySelector('.total-col').textContent = calculateTotal(colInputs).toFixed(1);
            
            // Thailand Total
            let thaiInputs = [
                row.querySelector('.thai-ea'), 
                row.querySelector('.thai-ms'), 
                row.querySelector('.thai-va'), 
                row.querySelector('.thai-fb'), 
                row.querySelector('.thai-ps')
            ];
            row.querySelector('.total-thai').textContent = calculateTotal(thaiInputs).toFixed(1);
            
            // Nepal Total
            let nepalInputs = [
                row.querySelector('.nepal-ea'), 
                row.querySelector('.nepal-ms'), 
                row.querySelector('.nepal-va'), 
                row.querySelector('.nepal-fb'), 
                row.querySelector('.nepal-ps')
            ];
            row.querySelector('.total-nepal').textContent = calculateTotal(nepalInputs).toFixed(1);
            
            // Bangladesh Total
            let bangInputs = [
                row.querySelector('.bang-ea'), 
                row.querySelector('.bang-ms'), 
                row.querySelector('.bang-va'), 
                row.querySelector('.bang-fb'), 
                row.querySelector('.bang-ps')
            ];
            row.querySelector('.total-bang').textContent = calculateTotal(bangInputs).toFixed(1);
        }

        function updateGrandTotals() {
            let totals = {
                cbu: 0, brazil: 0, argentina: 0, colombia: 0, thailand: 0, nepal: 0, bangladesh: 0
            };
            
            document.querySelectorAll('#timeMatrix tbody tr').forEach(row => {
                totals.cbu += parseFloat(row.querySelector('.total-cbu').textContent || 0);
                totals.brazil += parseFloat(row.querySelector('.total-brazil').textContent || 0);
                totals.argentina += parseFloat(row.querySelector('.total-arg').textContent || 0);
                totals.colombia += parseFloat(row.querySelector('.total-col').textContent || 0);
                totals.thailand += parseFloat(row.querySelector('.total-thai').textContent || 0);
                totals.nepal += parseFloat(row.querySelector('.total-nepal').textContent || 0);
                totals.bangladesh += parseFloat(row.querySelector('.total-bang').textContent || 0);
            });
            
            document.getElementById('grandTotalCBU').textContent = totals.cbu.toFixed(1);
            document.getElementById('grandTotalBrazil').textContent = totals.brazil.toFixed(1);
            document.getElementById('grandTotalArgentina').textContent = totals.argentina.toFixed(1);
            document.getElementById('grandTotalColombia').textContent = totals.colombia.toFixed(1);
            document.getElementById('grandTotalThailand').textContent = totals.thailand.toFixed(1);
            document.getElementById('grandTotalNepal').textContent = totals.nepal.toFixed(1);
            document.getElementById('grandTotalBangladesh').textContent = totals.bangladesh.toFixed(1);
        }

        function createInput(value, className) {
            let input = document.createElement('input');
            input.type = 'number';
            input.step = '0.1';
            input.value = value || 0;
            input.className = className;
            input.addEventListener('input', function(e) {
                let row = this.closest('tr');
                updateRowTotals(row);
                updateGrandTotals();
            });
            return input;
        }

        // Populate table
        let tbody = document.querySelector('#timeMatrix tbody');
        modelData.forEach(rowData => {
            let tr = document.createElement('tr');
            
            // Model and Bike
            let tdModel = document.createElement('td');
            tdModel.textContent = rowData[0];
            tr.appendChild(tdModel);
            
            let tdBike = document.createElement('td');
            tdBike.textContent = rowData[1];
            tr.appendChild(tdBike);
            
            // CBU Section
            for (let i = 2; i <= 6; i++) {
                let td = document.createElement('td');
                td.appendChild(createInput(rowData[i], 'cbu-' + ['ea','ms','va','fb','ps'][i-2]));
                tr.appendChild(td);
            }
            // CBU Total
            let tdCBUTotal = document.createElement('td');
            tdCBUTotal.className = 'total-cbu total-display';
            tdCBUTotal.textContent = '0.0';
            tr.appendChild(tdCBUTotal);
            
            // Brazil Section
            for (let i = 7; i <= 11; i++) {
                let td = document.createElement('td');
                td.appendChild(createInput(rowData[i], 'brazil-' + ['ea','ms','va','fb','ps'][i-7]));
                tr.appendChild(td);
            }
            let tdBrazilTotal = document.createElement('td');
            tdBrazilTotal.className = 'total-brazil total-display';
            tdBrazilTotal.textContent = '0.0';
            tr.appendChild(tdBrazilTotal);
            
            // Argentina Section
            for (let i = 12; i <= 16; i++) {
                let td = document.createElement('td');
                td.appendChild(createInput(rowData[i] || 0, 'arg-' + ['ea','ms','va','fb','ps'][i-12]));
                tr.appendChild(td);
            }
            let tdArgTotal = document.createElement('td');
            tdArgTotal.className = 'total-arg total-display';
            tdArgTotal.textContent = '0.0';
            tr.appendChild(tdArgTotal);
            
            // Colombia Section
            for (let i = 17; i <= 21; i++) {
                let td = document.createElement('td');
                td.appendChild(createInput(rowData[i] || 0, 'col-' + ['ea','ms','va','fb','ps'][i-17]));
                tr.appendChild(td);
            }
            let tdColTotal = document.createElement('td');
            tdColTotal.className = 'total-col total-display';
            tdColTotal.textContent = '0.0';
            tr.appendChild(tdColTotal);
            
            // Thailand Section
            for (let i = 22; i <= 26; i++) {
                let td = document.createElement('td');
                td.appendChild(createInput(rowData[i] || 0, 'thai-' + ['ea','ms','va','fb','ps'][i-22]));
                tr.appendChild(td);
            }
            let tdThaiTotal = document.createElement('td');
            tdThaiTotal.className = 'total-thai total-display';
            tdThaiTotal.textContent = '0.0';
            tr.appendChild(tdThaiTotal);
            
            // Nepal Section
            for (let i = 27; i <= 31; i++) {
                let td = document.createElement('td');
                td.appendChild(createInput(rowData[i] || 0, 'nepal-' + ['ea','ms','va','fb','ps'][i-27]));
                tr.appendChild(td);
            }
            let tdNepalTotal = document.createElement('td');
            tdNepalTotal.className = 'total-nepal total-display';
            tdNepalTotal.textContent = '0.0';
            tr.appendChild(tdNepalTotal);
            
            // Bangladesh Section
            for (let i = 32; i <= 36; i++) {
                let td = document.createElement('td');
                td.appendChild(createInput(rowData[i] || 0, 'bang-' + ['ea','ms','va','fb','ps'][i-32]));
                tr.appendChild(td);
            }
            let tdBangTotal = document.createElement('td');
            tdBangTotal.className = 'total-bang total-display';
            tdBangTotal.textContent = '0.0';
            tr.appendChild(tdBangTotal);
            
            tbody.appendChild(tr);
            
            // Initial calculation
            updateRowTotals(tr);
        });
        
        updateGrandTotals();
    </script>
</body>
</html>

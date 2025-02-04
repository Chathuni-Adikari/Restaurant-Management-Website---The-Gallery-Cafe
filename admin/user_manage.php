<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .admin-dashboard {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1, h2 {
            text-align: center;
        }
        .product-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        .product-table th, .product-table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        .product-table th {
            background-color: #f2f2f2;
        }
        .product-actions {
            display: flex;
            justify-content: space-around;
        }
        .edit-btn {
            background-color: #f0ad4e;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 3px;
        }
        .delete-btn {
            background-color: #d9534f;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 3px;
        }
        .add-product {
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        form label {
            margin-bottom: 5px;
        }
        form input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        form button {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <div class="admin-dashboard">
        <h1>Admin Dashboard</h1>

        <div class="add-user">
            <h2>Add New User</h2>
            <form id="addUserForm">
                <label for="userNumber">Contact Number:</label>
                <input type="text" id="userNumber" name="userNumber" required>
                
                <label for="userEmail">Email:</label>
                <input type="text" id="userEmail" name="userEmail" required>

                <label for="userName">User Name:</label>
                <input type="text" id="userName" name="userName" required>

                <label for="userPassword">Password</label>
                <input type="text" id="userPassword" name="userPassword" required>

                <label for="userRole">Role:</label>
                <input type="text" id="userRole" name="userRole" required>
                
                
                <button type="submit">Add New User</button>
            </form>
        </div>
        <br><br>
        <div class="user-list">
        <h2>Registered Users</h2><br>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="productTableBody">
                    <tr>
                        <td>0740495618</td>
                        <td>a@gmail.com</td>
                        <td>Amasha</td>
                        <td>1234</td>
                        <td>admin</td>
                        <td class="user-actions">
                            <button class="edit-btn" onclick="editUser('a@gmail.com', '0740495618')">Edit</button>
                            <button class="delete-btn" onclick="deleteUser(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>0757141698</td>
                        <td>c@gmail.com</td>
                        <td>Chathuni</td>
                        <td>234</td>
                        <td>customer</td>
                        <td class="user-actions">
                            <button class="edit-btn" onclick="editUser('c@gmail.com', '0757141698')">Edit</button>
                            <button class="delete-btn" onclick="deleteUser(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>0773110966</td>
                        <td>l@gmail.com</td>
                        <td>Lilly</td>
                        <td>345</td>
                        <td>staff</td>
                        <td class="user-actions">
                            <button class="edit-btn" onclick="editUser('l@gmail.com', '0773110966')">Edit</button>
                            <button class="delete-btn" onclick="deleteUser(this)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>

                  
        </div>
        </div>
   


    <script>
        document.getElementById('addUserForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            const number = document.getElementById('userNumber').value;
            const email= document.getElementById('userEmail').value;
            const name = document.getElementById('userName').value;
            const password = document.getElementById('userPassword').value;
            const role = document.getElementById('userRole').value;

            
            if (number && email && name && password && role) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const newRow = document.createElement('tr');
                    newRow.innerHTML = `
                        <td>${number}</td>
                        <td>${email}</td>
                        <td>${name}</td>
                        <td>${password}</td>
                        <td>${role}</td>
                        <td class="user-actions">
                            <button class="edit-btn" onclick="editUser('${number}', '${email}')">Edit</button>
                            <button class="delete-btn" onclick="deleteUser(this)">Delete</button>
                        </td>
                    `;
                    document.getElementById('productTableBody').appendChild(newRow);
                };

            }
        });

        function editUser(number, email) {
            alert(`Edit Email: ${number}, Contact-No: ${email}`);
        }

        function deleteUser(button) {
            const row = button.parentElement.parentElement;
            row.remove();
        }
    </script>
</body>
</html>

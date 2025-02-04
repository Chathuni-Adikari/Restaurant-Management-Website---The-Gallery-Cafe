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

        <div class="add-product">
            <h2>Add New Product</h2>
            <form id="addProductForm">
                <label for="productTitle">Product Title:</label>
                <input type="text" id="productTitle" name="productTitle" required>
                
                <label for="productPrice">Product Price:</label>
                <input type="text" id="productPrice" name="productPrice" required>
                
                <label for="productImage">Product Image:</label>
                <input type="file" id="productImage" name="productImage" accept="image/*" required>
                
                <button type="submit">Add Product</button>
            </form>
        </div>
        <br><br>
        <div class="product-list">
        <h2>Sri Lankan - Appetizers</h2>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="productTableBody">
                    <tr>
                        <td><img src="Resources/Menu/Sri Lankan/a1.png" alt="Fish Cutlets" width="100"></td>
                        <td>Fish Cutlets</td>
                        <td>LKR 1150/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Fish Cutlets', 'LKR 1150/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resources/Menu/Sri Lankan/a2.png" alt="Spicy Prawn Cocktail" width="100"></td>
                        <td>Spicy Prawn Cocktail</td>
                        <td>LKR 1400/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Spicy Prawn Cocktail', 'LKR 1400/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resources/Menu/Sri Lankan/a3.png" alt="Vegetable Roti" width="100"></td>
                        <td>Vegetable Roti</td>
                        <td>LKR 1350/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Vegetable Roti', 'LKR 1350/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>


            <h2>Chinese - Appetizers</h2>
         <table class="product-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="productTableBody">
                <tr>
                    <td><img src="Resoures/Menu/Chinese/ch1.png" alt="Chicken Dumplings" width="100"></td>
                    <td>Chicken Dumplings</td>
                    <td>LKR 1750/=</td>
                    <td class="actions">
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td><img src="Resoures/Menu/Chinese/ch2.png" alt="Crispy Prawn Wontons" width="100"></td>
                    <td>Crispy Prawn Wontons</td>
                    <td>LKR 1400/=</td>
                    <td class="actions">
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td><img src="Resoures/Menu/Chinese/ch3.png" alt="Vegetable Lettuce Wraps" width="100"></td>
                    <td>Vegetable Lettuce Wraps</td>
                    <td>LKR 1350/=</td>
                    <td class="actions">
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Delete</button>
                    </td>
                </tr>
            </tbody>
    </table>

    
    <h2>Italian - Appetizers</h2>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="productTableBody">
                    <tr>
                        <td><img src="Resoures/Menu/Italian/a1.png" alt="Bruschetta" width="100"></td>
                        <td>Bruschetta</td>
                        <td>LKR 750/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Bruschetta', 'LKR 750/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resoures/Menu/Italian/a2.png" alt="Caprese Salad" width="100"></td>
                        <td>Caprese Salad</td>
                        <td>LKR 700/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Caprese Salad', 'LKR 700/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resoures/Menu/Italian/a3.png" alt="Antipasto Platter" width="100"></td>
                        <td>Antipasto Platter</td>
                        <td>LKR 1350/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Antipasto Platter', 'LKR 1350/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

    
            <h2>Sri Lankan - Main Dishes</h2>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="mainDishesTableBody">
                    <tr>
                        <td><img src="Resources/Menu/Sri Lankan/m1.png" alt="Prawn Curry" width="100"></td>
                        <td>Prawn Curry</td>
                        <td>LKR 1850/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Prawn Curry', 'LKR 1850/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resources/Menu/Sri Lankan/m2.png" alt="Crab Curry" width="100"></td>
                        <td>Crab Curry</td>
                        <td>LKR 1650/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Crab Curry', 'LKR 1650/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resources/Menu/Sri Lankan/m3.png" alt="Fish Ambul Thiyal" width="100"></td>
                        <td>Fish Ambul Thiyal</td>
                        <td>LKR 1600/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Fish Ambul Thiyal', 'LKR 1600/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h2>    Chinese - Main Dishes</h2>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="productTableBody">
                    <tr>
                        <td><img src="Resoures/Menu/Chinese/m1.png" alt="Kung Chicken" width="100"></td>
                        <td>Kung Chicken</td>
                        <td>LKR 1850/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Kung Chicken', 'LKR 1850/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resoures/Menu/Chinese/m2.png" alt="Beef with Broccoli" width="100"></td>
                        <td>Beef with Broccoli</td>
                        <td>LKR 1670/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Beef with Broccoli', 'LKR 1670/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resoures/Menu/Chinese/m3.png" alt="Mapo Tofu" width="100"></td>
                        <td>Mapo Tofu</td>
                        <td>LKR 1600/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Mapo Tofu', 'LKR 1600/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h2>    Italian - Main Dishes</h2>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="productTableBody">
                    <tr>
                        <td><img src="Resoures/Menu/Italian/m4.png" alt="Pepperoni Pizza" width="100"></td>
                        <td>Pepperoni Pizza</td>
                        <td>LKR 1650/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Pepperoni Pizza', 'LKR 1650/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resoures/Menu/Chinese/m2.png" alt="Lasagna" width="100"></td>
                        <td>Lasagna</td>
                        <td>LKR 1800/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Lasagna', 'LKR 1800/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resoures/Menu/Italian/m3.png" alt="Chicken Parmigiana" width="100"></td>
                        <td>Chicken Parmigiana</td>
                        <td>LKR 1600/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Chicken Parmigiana', 'LKR 1600/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table><br><br><br>


            <h2>Sri Lankan - Rice and Noodles</h2>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="riceNoodlesTableBody">
                    <tr>
                        <td><img src="Resources/Menu/Sri Lankan/r1.png" alt="Lamprais" width="100"></td>
                        <td>Lamprais</td>
                        <td>LKR 1750/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Lamprais', 'LKR 1750/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resources/Menu/Sri Lankan/r2.png" alt="String Hoppers with Curry" width="100"></td>
                        <td>String Hoppers with Curry</td>
                        <td>LKR 1500/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('String Hoppers with Curry', 'LKR 1500/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resources/Menu/Sri Lankan/r3.png" alt="Hoppers with Lunu Miris" width="100"></td>
                        <td>Hoppers with Lunu Miris</td>
                        <td>LKR 1200/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Hoppers with Lunu Miris', 'LKR 1200/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>


            <h2>Chinese - Rice and Noodles</h2>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="riceNoodlesTableBody">
                    <tr>
                        <td><img src="Resoures/Menu/Chinese/r1.png" alt="Yangzhou Fried Rice" width="100"></td>
                        <td>Yangzhou Fried Rice</td>
                        <td>LKR 1750/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Yangzhou Fried Rice', 'LKR 1750/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resoures/Menu/Chinese/r2.png" alt="Hokkien Noodles" width="100"></td>
                        <td>Hokkien Noodles</td>
                        <td>LKR 1500/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Hokkien Noodles', 'LKR 1500/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resoures/Menu/Chinese/r3.png" alt="Steamed Jasmine Rice" width="100"></td>
                        <td>Steamed Jasmine Rice</td>
                        <td>LKR 1200/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Steamed Jasmine Rice', 'LKR 1200/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>


            <h2>Italian - Rice and Noodles</h2>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="riceNoodlesTableBody">
                    <tr>
                        <td><img src="Resoures/Menu/Italian/m1.png" alt="Spaghetti Carbonara" width="100"></td>
                        <td>Spaghetti Carbonara</td>
                        <td>LKR 1650/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Spaghetti Carbonara', 'LKR 1650/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resoures/Menu/Italian/r2.png" alt="Risotto Milanese" width="100"></td>
                        <td>Risotto Milanese</td>
                        <td>LKR 1500/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Risotto Milanese', 'LKR 1500/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resoures/Menu/Italian/r3.png" alt="Fettuccine Alfredo" width="100"></td>
                        <td>Fettuccine Alfredo</td>
                        <td>LKR 1350/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Fettuccine Alfredo', 'LKR 1350/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table><br><br><br>




            
            <h2>Sri Lankan - Desserts</h2>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="dessertsTableBody">
                    <tr>
                        <td><img src="Resoures/Menu/Sri Lankan/d1.png" alt="Watalappam" width="100"></td>
                        <td>Watalappam</td>
                        <td>LKR 450/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Watalappam', 'LKR 450/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resoures/Menu/Sri Lankan/d2.png" alt="Kiri Pani" width="100"></td>
                        <td>Kiri Pani</td>
                        <td>LKR 350/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Kiri Pani', 'LKR 350/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resoures/Menu/Sri Lankan/d3.png" alt="Coconut Pancake" width="100"></td>
                        <td>Coconut Pancake</td>
                        <td>LKR 550/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Coconut Pancake', 'LKR 550/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h2>Chinese - Desserts</h2>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="dessertsTableBody">
                    <tr>
                        <td><img src="Resoures/Menu/Chinese/d1.png" alt="Mango Pudding" width="100"></td>
                        <td>Mango Pudding</td>
                        <td>LKR 1050/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Mango Pudding', 'LKR 1050/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resoures/Menu/Chinese/d2.png" alt="Sesame Balls" width="100"></td>
                        <td>Sesame Balls</td>
                        <td>LKR 1100/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Sesame Balls', 'LKR 1100/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resoures/Menu/Chinese/d3.png" alt="Fried Banana with Ice Cream" width="100"></td>
                        <td>Fried Banana with Ice Cream</td>
                        <td>LKR 1000/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Fried Banana with Ice Cream', 'LKR 1000/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h2>Italian - Desserts</h2>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="dessertsTableBody">
                    <tr>
                        <td><img src="Resoures/Menu/Italian/d1.png" alt="Tiramisu" width="100"></td>
                        <td>Tiramisu</td>
                        <td>LKR 1050/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Tiramisu', 'LKR 1050/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resoures/Menu/Italian/d2.png" alt="Panna Cotta" width="100"></td>
                        <td>Panna Cotta</td>
                        <td>LKR 1100/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Panna Cotta', 'LKR 1100/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resoures/Menu/Italian/d3.png" alt="Gelato" width="100"></td>
                        <td>Gelato</td>
                        <td>LKR 1000/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Gelato', 'LKR 1000/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table><br><br><br>




            <h2>Sri Lankan - Beverages</h2>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="beveragesTableBody">
                    <tr>
                        <td><img src="Resoures/Menu/Sri Lankan/bv1.png" alt="Fresh King Coconut" width="100"></td>
                        <td>Fresh King Coconut</td>
                        <td>LKR 350/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Fresh King Coconut', 'LKR 350/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resoures/Menu/Sri Lankan/bv2.png" alt="Sri Lankan Milk Tea" width="100"></td>
                        <td>Sri Lankan Milk Tea</td>
                        <td>LKR 250/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Sri Lankan Milk Tea', 'LKR 250/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resoures/Menu/Sri Lankan/bv3.png" alt="Fruit Juice (Mango, Pineapple)" width="100"></td>
                        <td>Fruit Juice (Mango, Pineapple)</td>
                        <td>LKR 650/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Fruit Juice (Mango, Pineapple)', 'LKR 650/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>



            <h2>Chinese - Beverages</h2>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="beveragesTableBody">
                    <tr>
                        <td><img src="Resoures/Menu/Chinese/bv1.png" alt="Chinese Tea" width="100"></td>
                        <td>Chinese Tea</td>
                        <td>LKR 450/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Chinese Tea', 'LKR 450/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resoures/Menu/Chinese/bv2.png" alt="Lychee Juice" width="100"></td>
                        <td>Lychee Juice</td>
                        <td>LKR 850/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Lychee Juice', 'LKR 850/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resoures/Menu/Chinese/bv3.png" alt="Chilled Lemon Tea" width="100"></td>
                        <td>Chilled Lemon Tea</td>
                        <td>LKR 950/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Chilled Lemon Tea', 'LKR 950/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h2>Italian - Beverages</h2>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="beveragesTableBody">
                    <tr>
                        <td><img src="Resoures/Menu/Italian/bv1.png" alt="Espresso" width="100"></td>
                        <td>Espressoa</td>
                        <td>LKR 550/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Espresso', 'LKR 550/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resoures/Menu/Italian/bv2.png" alt="Cappuccino" width="100"></td>
                        <td>Cappuccino</td>
                        <td>LKR 650/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Cappuccino', 'LKR 650/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Resoures/Menu/Italian/bv3.png" alt="Italian Lemonade" width="100"></td>
                        <td>Italian Lemonade</td>
                        <td>LKR 950/=</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('Italian Lemonade', 'LKR 950/=')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            
            
        </div>
        </div>
   
    </div>

    <script>
        document.getElementById('addProductForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            const title = document.getElementById('productTitle').value;
            const price = document.getElementById('productPrice').value;
            const image = document.getElementById('productImage').files[0];
            
            if (title && price && image) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const newRow = document.createElement('tr');
                    newRow.innerHTML = `
                        <td><img src="${e.target.result}" alt="${title}" width="100"></td>
                        <td>${title}</td>
                        <td>${price}</td>
                        <td class="product-actions">
                            <button class="edit-btn" onclick="editProduct('${title}', '${price}')">Edit</button>
                            <button class="delete-btn" onclick="deleteProduct(this)">Delete</button>
                        </td>
                    `;
                    document.getElementById('productTableBody').appendChild(newRow);
                };
                reader.readAsDataURL(image);
            }
        });

        function editProduct(title, price) {
            alert(`Edit product: ${title}, Price: ${price}`);
        }

        function deleteProduct(button) {
            const row = button.parentElement.parentElement;
            row.remove();
        }
    </script>
</body>
</html>

/* General Styling */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #A8CBBD; /* Green color for header */
    padding: 10px 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

header .logo img {
    width: 150px;
}

header .search-bar {
    display: flex;
    align-items: center;
}

header .search-bar input[type="text"] {
    padding: 5px;
    margin-right: 10px;
    border-radius: 5px;
    border: 1px solid #ddd;
}

header .search-bar button {
    padding: 6px 12px;
    background-color: #ffffff;
    border: 1px solid #A8CBBD;
    border-radius: 5px;
    cursor: pointer;
}

header .icons img {
    width: 30px;
    margin: 0 10px;
}

.main-content {
    padding: 20px;
}

.admin-dashboard {
    max-width: 1200px;
    margin: 0 auto;
    background-color: #A8CBBD; /* Green color for background */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.admin-sections {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.admin-section {
    padding: 20px;
    background-color: #A8CBBD; /* Green color for section background */
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.admin-section h2 {
    margin-top: 0;
    color: white; /* White text for section headers */
}

.admin-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.admin-table th, .admin-table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
    background-color: white; /* White background for table cells */
}

.admin-table th {
    background-color: #A8CBBD; /* Green color for table header */
    color: white;
}

.add-product-button {
    padding: 10px 20px;
    background-color: #A8CBBD; /* Green color for add button */
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.admin-table button {
    margin: 2px;
    padding: 5px 10px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    color: white;
}

.admin-table button.edit {
    background-color: rgba(75, 192, 192, 1); /* Blue color for edit button */
}

.admin-table button.delete {
    background-color: rgba(255, 99, 132, 1); /* Pink color for delete button */
}

.nav-buttons {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 30px;
    padding: 20px;
    background-color: #f8f8f8;
}

.nav-buttons button {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    background-color: #A8CBBD; /* Green color for nav buttons */
    border: none;
    border-radius: 10px;
    cursor: pointer;
    font-size: 16px;
    color: #FFFFFF;
    font-weight: bold;
    font-style: italic;
}

.nav-buttons button img.nav-icon {
    width: 60px;
    height: 80px;
    margin-bottom: 10px;
}

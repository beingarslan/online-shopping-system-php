<?php 
include "config.php";
function getCategories() {
    $sql = "SELECT * FROM categories";
    $result = mysqli_query(getConnection(), $sql);
    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $categories;
}

function getCategory($id) {
    $sql = "SELECT * FROM categories WHERE id = $id";
    $result = mysqli_query(getConnection(), $sql);
    $category = mysqli_fetch_assoc($result);
    return $category;
}

function addCategory($name, $description) {
    $sql = "INSERT INTO categories (name, description) VALUES ('$name', '$description')";
    $result = mysqli_query(getConnection(), $sql);
    return $result;
}

function updateCategory($id, $name, $description) {
    $sql = "UPDATE categories SET name = '$name', description = '$description' WHERE id = $id";
    $result = mysqli_query(getConnection(), $sql);
    return $result;
}

function deleteCategory($id) {
    $sql = "DELETE FROM categories WHERE id = $id";
    $result = mysqli_query(getConnection(), $sql);
    return $result;
}

?>
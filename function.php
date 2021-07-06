<?php

function runQuery($sql){

}

function showAlert($type,$message){
    return "<p class='alert alert-$type'>$message</p>";
}

function addCategory(){
    $title = $_POST['category'];
    $sql = "INSERT INTO categories (title) VALUES ('$title')";
    if (mysqli_query(conn(),$sql)){
        return true;
    }
    return false;
}

function categories(){
    $sql = "SELECT * FROM categories";
    $query = mysqli_query(conn(),$sql);
    $rows=[];
    while ($row = mysqli_fetch_object($query)){
    array_push($rows,$row);}
    return $rows;
}

function deleteCategory($id){
    $sql = "DELETE FROM categories WHERE id=$id";
    if (mysqli_query(conn(),$sql)){
        return true;
    }
    return false;
}

//single category
function category($id){
    $sql = "SELECT * FROM categories WHERE id=$id";
    if (mysqli_query(conn(),$sql)){
        return true;
    }
    return false;
}

//UpdateCategory
function updateCategory($id){
    $title = $_POST['category'];
    $sql = "UPDATE categories SET title='$title' WHERE id=$id";
    if (mysqli_query(conn(),$sql)){
        return true;
    }
    return false;
}
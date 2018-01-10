<?php
    function dataGet($table, $condition, $connect){
        include $connect;
        $sql = mysqli_query($con, "SELECT * FROM $table $condition");
        $result = mysqli_fetch_array($sql);
        return $result;
    }
    function dbRowInsert($table_name, $form_data){
        include '../../../connect/connect.php';
            // retrieve the keys of the array (column titles)
            $fields = array_keys($form_data);

            // build the query
            $sql = "INSERT INTO ".$table_name."
            (`".implode('`,`', $fields)."`)
            VALUES('".implode("','", $form_data)."')";

            // run and return the query result resource
            return mysqli_query($con, $sql);
    }
    function queryList($table,$condition,$orderBy,$connect){
        include $connect;
        $query = mysqli_query($con, "SELECT * FROM $table $condition ORDER BY $orderBy DESC");
        return $query;
    }
    function queryListInner($table,$condition,$orderBy,$connect){
        include $connect;
        $query = mysqli_query($con, "SELECT * FROM $table $condition ORDER BY $orderBy DESC");
        return $query;
    }
    function gettingData($table, $usr_id, $condition){
        include '../../connect/connect.php';
        $sql = mysqli_query($con, "SELECT * FROM user WHERE usr_id='$usr_id'");
        $result = mysqli_fetch_array($sql);
        return $result;
    }
    function lastRecord($table, $condition, $connect){
        include $connect;
        $sql = mysqli_query($con, "SELECT * FROM $table $condition");
        $result = mysqli_fetch_array($sql);
        return $result;
    }
    function dbRowUpdate($table_name, $form_data, $where_clause='')
    {
        include '../../../connect/connect.php';
        // check for optional where clause
        $whereSQL = '';
        if(!empty($where_clause))
        {
            // check to see if the 'where' keyword exists
            if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
            {
                // not found, add key word
                $whereSQL = " WHERE ".$where_clause;
            } else
            {
                $whereSQL = " ".trim($where_clause);
            }
        }
        // start the actual SQL statement
        $sql = "UPDATE ".$table_name." SET ";

        // loop and build the column /
        $sets = array();
        foreach($form_data as $column => $value)
        {
             $sets[] = "`".$column."` = '".$value."'";
        }
        $sql .= implode(', ', $sets);

        // append the where statement
        $sql .= $whereSQL;

        // run and return the query result
        return mysqli_query($con, $sql);
    }
    function rowCount($table, $condition ,$connect){
        include $connect;
        $sql = mysqli_query($con, "select * from $table $condition");
        $result = mysqli_num_rows($sql);
        return $result;
    }
    function usernameCheck($table, $condition){
        include '../../../connect/connect.php';
        $sql = mysqli_query($con, "SELECT * FROM $table $condition");
        $query = mysqli_num_rows($sql);
        return $query;
    }
    function dbRowDelete($table_name, $where_clause=''){
        include '../../../connect/connect.php';
        // check for optional where clause
        $whereSQL = '';
        if(!empty($where_clause))
        {
            // check to see if the 'where' keyword exists
            if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
            {
                // not found, add keyword
                $whereSQL = " WHERE ".$where_clause;
            } else
            {
                $whereSQL = " ".trim($where_clause);
            }
        }
        // build the query
        $sql = "DELETE FROM ".$table_name.$whereSQL;

        // run and return the query result resource
        return mysqli_query($con, $sql);
    }
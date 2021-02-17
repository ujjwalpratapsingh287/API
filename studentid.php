<?php
$con = mysqli_connect("localhost","root","","api_data");
$response = array();
if($con){
    $sql = "select * from data";
    $result = mysqli_query($con,$sql);
    if($result){
        header("Content-Type: JSON");
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['id'] = $row ['id'];
            $response[$i]['name'] = $row ['name'];
            $response[$i]['last_name'] = $row ['last_name'];
            $response[$i]['height'] = $row ['height'];
            $response[$i]['weight'] = $row ['weight'];
            $response[$i]['batch'] = $row ['batch'];
            $response[$i]['description'] = $row ['description'];
            $response[$i]['address'] = $row ['address'];
            $response[$i]['city'] = $row ['city'];
            $response[$i]['province'] = $row ['province'];
            $response[$i]['country'] = $row ['country'];
            $response[$i]['phone'] = $row ['phone'];
            $response[$i]['email'] = $row ['email'];
            $response[$i]['website'] = $row ['website'];
            $response[$i]['MAD100'] = $row ['MAD100'];
            $response[$i]['MAD105'] = $row ['MAD105'];
            $response[$i]['MAD110'] = $row ['MAD110'];
            $response[$i]['MAD120'] = $row ['MAD120'];
            $response[$i]['MAD125'] = $row ['MAD125'];
            $response[$i]['MAD200'] = $row ['MAD200'];
            $response[$i]['MAD225'] = $row ['MAD225'];
            $response[$i]['status'] = $row ['status'];
            $i++;

        }
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
    
}
else{
    echo "DB connection failed";
}
?>





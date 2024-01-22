<?php
$main_cause = [
    'Vehicle Defect',
    'Road Defect',
    'Human Error',
];

$collision_type = [
    'Head-on Collision',
    'Sideswipe Collision',
    'Rear-end Collision',
    'Side-Impact Collision',
    'T-bone Car Accident',
    'Vehicle Rollover',
    'Multiple Vehicle Accident',
    'Single Vehicle Accident',
];

$location = [
        'location1',
        'location2',
        'location3',
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script
            src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>


<style>

    table {
        width: 100%;
        text-align: center;
    }

    tr{
        height: 33px;
    }

    table, th, td  {
        border: 1px solid #000;
        border-collapse: collapse;
    }

    table colgroup col:nth-child(1) {
        width: calc((4/13) * 100%);
    }

</style>

<table>
    <colgroup>
        <col>
    </colgroup>
    <tr>
        <th>Category</th>
        <th>Current Week</th>
        <th>Month to Date</th>
        <th>Current Quarter</th>
        <th>Year to Date</th>
    </tr>
    <tr>
        <th>Period 1</th>
        <th>Period 2</th>
        <th>Period 3</th>
        <th>Period 4</th>
    </tr>
    <tbody>
    <tr>
        <td>Cause</td>
    </tr>
    <?php foreach($main_cause as $value): ?>
        <tr>
            <td><?= $value ?></td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td>Collision</td>
    </tr>
    <?php foreach($collision_type as $value): ?>
        <tr>
            <td><?= $value ?></td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td>Location</td>
    </tr>
    <?php foreach($location as $value): ?>
        <tr>
            <td><?= $value ?></td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td>Total</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
    </tr>
    </tbody>
</table>

<script>
    /**
     * total no. of columns is equal to 13
     */
    $(document).ready(function(){
        $('table tr:nth-child(1) th:nth-child(1)').attr('rowspan', 2);
    });
</script>

</body>
</html>

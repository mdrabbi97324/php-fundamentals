<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // --ep_05
        // $name = "Dark Matter";
        // $read = true;

        // if($read ){
        //     $message = "You have read $name";
        // } else{
        //     $message = "You have NOT read $name";
        // }

        //ep-06_arrays
        // $books = [
        //     "English",
        //     "Bangla",
        //     "Mathmatics"
        // ];

        //ep_07_Asossiative array

        $books = [
           [
            'name' => 'English',
            'author' => 'Tanvir vai',
            'purchaseUrl' => 'http://example1.com'
           ],
           [
            'name' => 'Bangla',
            'author' => 'Jobayer vai',
            'purchaseUrl' => 'http://example2.com'
           ],
           [
            'name' => 'Math',
            'author' => 'Kamrul vai',
            'purchaseUrl' => 'http://example3.com'
           ]
        ];


    ?>
    <h1>
        <?php
            // -------------- Variables --------------ep_04

            // $greeting = "Golam Rabbi";
            // echo "Hello" . " Everyone ";
            // echo "My name is " . $greeting;
            // echo " $greeting is my Name.";
            // echo "Assalamualikum Everyone, I am $greeting"

            ?>
    </h1>
    
    <h1 >
        <!-- // ----------------Booleans and conditionals --------------ep_05 --> 
        <!-- <?php echo  $message; ?> 
        <br>
        <?= $message ?>  -->
    </h1>

    <h1>ep_06_arrays
        <!-- <ul>
            <?php foreach($books as $book){
                echo "<li>$book</li>";
            } ?>
        </ul>
        <ul>
            <?php foreach($books as $book){
                echo "<li>" . $book . "</li>";
            }
            ?>
        </ul>
        <ul>
            <?php foreach($books as $book){
                echo "<li>{$book}</li>";
            }
            ?>
        </ul>
        <ul>
            <?php foreach($books as $book) :  ?>
                <li><?php echo $book; ?></li>
            <?php endforeach; ?>
        </ul> -->
    </h1>

    <div>ep_07_Asossiative
        <ul>    
            <?php foreach($books as $book) : ?>
                <a href="<?= $book['purchaseUrl'] ?>">
                <li><?= $book['name'] ?></li>
                </a>
            <?php endforeach ?>
        </ul>

    </div>
</body>
</html>
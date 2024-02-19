<?php
    class Movie 
    {
        public $title;
        public $genre;
        public $director;
        public $duration;
        public $trama;
        public $vote;

        function __construct(string $title, string $genre, string $director, string $duration, string $trama, string $vote)
        {
            $this->title = $title;
            $this->genre = $genre;
            $this->director = $director;
            $this->duration = $duration;
            $this->trama = $trama;
            $this->vote = $vote;
        }

        public function getMovie(){
            return '<div>'.'<strong>'.'Title: '.'</strong>'.$this->title.'</div>'.'<div>'.'<strong>'.'Genre: '.'</strong>'.$this->genre.'</div>'.'<div>'.'<strong>'.'Director: '.'</strong>'.$this->director.'</div>'.'<div>'.'<strong>'.'Duration: '.'</strong>'.$this->duration.'</div>'.'<div>'.'<strong>'.'Trama: '.'</strong>'.$this->trama.'</div>'.'<div>'.'<strong>'.'Vote: '.'</strong>'.$this->vote.'</div>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP-OOP-1</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        
        
        <!-- Font Awesome Icons-->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
        

        <!-- CSS -->
        <!-- <link rel="stylesheet" href="css/12-col.css"> -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Vue JS -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    </head>

    <body>
        
        <div class="container">
            <header>
                <h1 class="text-center mb-5">
                    PHP-OOP-1   
                </h1>
            </header>
    
            <main class="d-flex">
                <div class="row">
                    <div class="col">
                        <div class="mb-5">
                            <h4>
                                <?php
                                    $interstellar = new Movie('Interstellar', 'Sci-fi', 'Christopher Nolan', '2h 49m', 'Set in a future where a failing Earth puts humanity on the brink of extinction, it sees a team of NASA scientists, 
                                    engineers, and pilots attempt to find a new habitable planet via interstellar travel. Of course, the trip has a lot of bumps along the way.','5');
                                    echo $interstellar->getMovie();
                                ?>
                            </h4>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <h4>
                                <?php
                                    $batman = new Movie('Batman: The Dark Knight', 'Action', 'Christopher Nolan', '2h 56m', 'The plot follows the vigilante Batman, police lieutenant James Gordon, and district attorney Harvey Dent, who form an alliance to dismantle organized crime in Gotham City. Their efforts are derailed by the Joker, an anarchistic mastermind who seeks to test 
                                    how far Batman will go to save the city from chaos.', '5');
                                    echo $batman->getMovie();
                                ?>
                            </h4>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <!-- JS -->
        <script src="js/script.js" type="text/javascript"></script>

    </body>
</html>
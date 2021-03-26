<!DOCTYPE html>
<html>
    <header>
        <link rel=stylesheet href="Estilos.css" type="text/css">
        <title>Recomendados De Netflix</title>
        <body>
            <div id="title">
                <h1>Netflix Recomendados </h1>
            </div>
            <div id="banner">
         
                <?php 
                echo "En este sitio encontraras algunas de  las mejores recomendaciones
                que puedes encontrar en netflix.
                Asi que ponte comodo trae algo de comer y ver las mejores series.
                Ademas que puedes disfrutarlas con una buena compañia, Espero te gusten  ";
                ?>
            </div>
            <div id=h2s>
                <h2>Series</h2> 
            </div>
            <ul class="galeria">
                    <li><a href="#img1"><img src="Img/100.jpg"></a></li>
                    <li><a href="#img2"><img src="Img/breking.jpg"></a></li>
                    <li><a href="#img3"><img src="Img/papel.jpg"></a></li>
                    <li><a href="#img4"><img src="Img/elites.jpg"></a></li>
                    <li><a href="#img5"><img src="Img/dead.jpg"></a></li>
                    <li><a href="#img6"><img src="Img/lucifer.jpg"></a></li>
                    <li><a href="#img7"><img src="Img/gambito.jpg"></a></li>
                    <li><a href="#img8"><img src="Img/brujo.jpg"></a></li>
            </ul>
            <div class="modal" id="img1">
                <h3>The 100</h3>
                <div class="imagen">
                    <a href="#img8">&#60;</a>
                    <a href="#img2"><img src="Img/100.jpg"></a>
                    <a href="#img2">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>  

            <div class="modal" id="img2">
                <h3>Breaking Bad</h3>   
                <div class="imagen">
                    <a href="#img1">&#60;</a>
                    <a href="#img3"><img src="Img/breking.jpg"></a>
                    <a href="#img3">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>  

            <div class="modal" id="img3">
                <h3>La casa de Papel</h3>
                <div class="imagen">
                    <a href="#img2">&#60;</a>
                    <a href="#img4"><img src="Img/papel.jpg"></a>
                    <a href="#img4">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>  

            <div class="modal" id="img4">
                <h3>Élite</h3>
                <div class="imagen">
                    <a href="#img3">&#60;</a>
                    <a href="#img5"><img src="Img/elites.jpg"></a>
                    <a href="#img5">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>  

            <div class="modal" id="img5">
                <h3>The Walking Dead</h3>
                <div class="imagen">
                    <a href="#img4">&#60;</a>
                    <a href="#img6"><img src="Img/dead.jpg"></a>
                    <a href="#img6">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>  

            <div class="modal" id="img6">
                <h3>Lucifer</h3>
                <div class="imagen">
                    <a href="#img5">&#60;</a>
                    <a href="#img7"><img src="Img/lucifer.jpg"></a>
                    <a href="#img7">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div>  

           
              
            <div class="modal" id="img7">
                <h3>Gambito de Dama</h3>
                <div class="imagen">
                    <a href="#img6">&#60;</a>
                    <a href="#img8"><img src="Img/gambito.jpg"></a>
                    <a href="#img8">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div> 

            <div class="modal" id="img8">
                <h3>The Witcher</h3>
                <div class="imagen">
                    <a href="#img7">&#60;</a>
                    <a href="#img1"><img src="Img/brujo.jpg"></a>
                    <a href="#img1">></a>
                </div>
                <a class="cerrar" href="">X</a>
            </div> 


               
            
        </body>
    </header>
</html>
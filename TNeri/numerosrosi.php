<html lang="es">
    <head>
        <title>Numeros pares </title>
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                text-align: center;
                background-color: blueviolet;
            
            }

            button{
                padding: 10px 20px;
                font-size: 16px;
                cursor: pointer;
                background-attachment: fixed;
                color: violet;
                border: none;
                border-radius:5px ;

            }
            button:hover{
                background-color: lightskyblue;

            }
           #resultado {
            margin-top: 20px;
            font-size: 18px;
            color:aquamarine


            }

        </style>
    </head>
    <body>
        <h1>Imprimir Numeros pares del 1 al 200 </h1>
        <button onclick ="mostrarPares()">Mostrar Numeros</button>
        <div id= "resultado"> </div>
        <script>
            function mostrarPares(){
                let resultadoDiv = document.getElementById("resultado")
                resultadoDiv.innerHTML="";//limpia antes de mostrar
                var Numeros="";//usamos var para la cadena  acumulada 
                for(let i = 1; i <= 200; i++){//let en el for
                    if (i% 2 ===0){//verifica si es par
                        Numeros += i +" ";



                    }

                }

                resultadoDiv.innerHTML=Numeros; //mostrar resultado


            }
        </script>
    </body>
</html>
    
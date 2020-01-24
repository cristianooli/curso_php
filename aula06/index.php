
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculadora</title>
        <script type="text/javascript" src="js/js_1.9/jquery-1.8.2.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>


            form p{
                width: 50%;
                /*display: flex;*/
                /*justify-content: space-between;*/

            }

            body{
                background-color: #DCDCDC; 

            }

            label,button{
                margin: 10px;
                padding: 0px;
                border-radius: 10px;
                width: 200px;
            }

            button{
                width: 250px;
            }


            #topo{
                position: fixed;
                top: 0;
                width: 100%;
                height: 100px;
                background-color: #228B22;
            }

            #corpo{
                position: fixed;
                padding: 10px;
                left: 230px;
                top: 120px;
                bottom: 20px;
                width: 100%;
                background-color: white;
            }

            #menu{
                position: fixed;
                left: 0px;
                top: 100px;
                bottom: 0px;
                width: 210;
                background-color: #363636;
            }

        </style>

    </head>
    <body>
        
        <h1>       </h1>
        <div id="topo"></div>
        <div id="menu"></div>
        <div id="corpo">
            
        <?php include 'calculadora.php';?>   
        
        
        </div>
    </body>
</html>

<?php
/*

  ____          _____               _ _           _       
 |  _ \        |  __ \             (_) |         | |      
 | |_) |_   _  | |__) |_ _ _ __ _____| |__  _   _| |_ ___ 
 |  _ <| | | | |  ___/ _` | '__|_  / | '_ \| | | | __/ _ \
 | |_) | |_| | | |  | (_| | |   / /| | |_) | |_| | ||  __/
 |____/ \__, | |_|   \__,_|_|  /___|_|_.__/ \__, |\__\___|
         __/ |                               __/ |        
        |___/                               |___/         
    
____________________________________
/ Si necesitas ayuda, contáctame en \
\ https://parzibyte.me               /
 ------------------------------------
        \   ^__^
         \  (oo)\_______
            (__)\       )\/\
                ||----w |
                ||     ||
Creado por Parzibyte (https://parzibyte.me).
------------------------------------------------------------------------------------------------
Si el código es útil para ti, puedes agradecerme siguiéndome: https://parzibyte.me/blog/sigueme/
Y compartiendo mi blog con tus amigos
También tengo canal de YouTube: https://www.youtube.com/channel/UCroP4BTWjfM0CkGB6AFUoBg?sub_confirmation=1
------------------------------------------------------------------------------------------------
*/ ?>
<?php
if (!isset($_GET["id"])) exit("No id provided");
include_once "header.php";
include_once "nav.php";
$id = $_GET["id"];
include_once "functions.php";
$employee = getEmployeeById($id);
?>
<div class="row">
    <div class="col-12">
        <h1 class="text-center">Editar Producto</h1>
    </div>
    <div class="col-12">
        <form action="employee_update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $employee->id ?>">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input value="<?php echo $employee->name ?>" name="name" placeholder="Name" type="text" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <button class="btn btn-success">
                    Save <i class="fa fa-check"></i>
                </button>
            </div>
        </form>
    </div>
</div>
<?php
include_once "footer.php";

<?php 

/** @var \yii\web\View $this*/
/** @var string $content*/
use app\assets\HomeAsset;
use yii\helpers\Html;

HomeAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?= Html::csrfMetaTags() ?>
        
        <link rel="stylesheet" href="./styles.css" />

        <title> <?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>

    <body>
        <?php $this->beginBody() ?>
        <header>
            <a href="#" class="logo">
                <h1>GrooveGalaxy</h1>
            </a>

            <nav>
                <ul>
                    <li>
                        <?= Html::a('Home', ['/site/home'] ) ?>
                     </li>
                    <li>
                        <?= Html::a('Sobre', ['/site/about'] ) ?>
                    </li>
                    <li>
                         <?= Html::a('Cursos', ['/curso'] ) ?>
                    </li>
                     <li>
                        <?= Html::a('Entrar', ['/site/login'] ) ?>
                    </li>
                    <li>
                        <?= Html::a('Criar conta', ['/site/login'] ) ?>
                    </li>
                    
                </ul>
            </nav>
        </header>
        <?= $content ?>
        <?php         
        ?>


        <script type="text/javascript">
            window.addEventListener("scroll", function() {
                let header = document.querySelector("header");
                header.classList.toggle("sticky", window.scrollY > 0);
            })
        </script>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
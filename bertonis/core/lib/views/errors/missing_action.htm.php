<h1><?php echo $this->pageTitle = "Action não encontrada" ?></h1>
<p>Não foi possível encontrar a <em>action</em> <strong><?php echo $details["action"] ?></strong>. Certifique-se de que existe um método <strong><?php echo $details["action"] ?>()</strong> na classe <strong><?php echo Inflector::camelize($details["controller"]) ?>Controller</strong>, e que a action possua sua respectiva view.</p>
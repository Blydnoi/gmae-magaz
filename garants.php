<?php
require_once "./inc/functions.php";

$tmp_type = "php";
$tmp_file = "0.tmp";
?>
<?php
$head["title"] = "Гарантии";
function show_content(){
$titles = "Гарантии";
$tmp_dir = "/templates/0/";
?>
			<h1><?php echo $titles ?></h1>
			
			<div class="digiseller-breadcrumbs">
            	<a href="/">Главная страница</a> &gt; <strong><?php echo $titles ?></strong>
            </div>
			
 
			
			<div class="pagesBox">
				<h4 class="icoWM">Аттестация WebMoney</h4>
                Мы прошли аттестацию в платёжной системе Webmoney, предоставив документы при 
личной встрече с аттестатором. Это позволяет нам принимать платежи автоматически 
и гарантирует, что вы проводите операцию с конкретным человеком
			</div>
			
			<div class="pagesBox">
				<h4 class="icoYM">Идентификация Яндекс</h4>
                Мы прошли идентификацию в платёжной системе Яндекс.Деньги, предоставив 
нотариально заверенные документы. Это позволяет нам работать с системой без 
ограничений и гарантирует, что вы проводите операцию с конкретным человеком.
			</div>
			
			<div class="pagesBox">
				<h4 class="icoQiwi">Именной кошелек QIWI</h4>
                Это специальный счёт в системе QIWI, который привязывается к конкретному 
магазину, проходя проверку службы безопасности системы QIWI. За каждым 
магазином закрепляется также менеджер.
			</div>
			
			<div class="pagesBox">
				<h4>Выгодная стабильность</h4>
                Как бы банально это не звучало, выгодно работать стабильно и постоянно, получая 
регулярную прибыль, а не обманывать разово. Благодаря этому правилу мы уже 
скоро отметим год успешной работы.
			</div>
			
			<div class="pagesBox">
				<h4>Успешные сделки</h4>
                Проведено более 10000 успешных сделок в рамках данного магазина!
			</div>
			
			<div class="pagesBox" style="border:none;">
				<h4>Техническая поддержка</h4>
                У нас работает Техническая Поддержка , которая оперативно ответит на все ваши 
вопросы в течении рабочего дня.
			</div>
			
<?php }
tmp_open($tmp_type,$tmp_dir,$tmp_file,$head);
?>
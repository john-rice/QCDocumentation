<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasAutomaticIndicatorHelper = true;
$helperPrefix = '';
$typeName = 'Maximum';
$helperName = 'MAX';
$helperArguments = 'symbol, 20';
$properties = array("PeriodsSinceMaximum");
$updateParameterType = 'time/number pair, or an <code>IndicatorDataPoint</code>';
$constructorArguments = '20';
$updateParameterValue = 'bar.EndTime, bar.Close';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'maximum';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>
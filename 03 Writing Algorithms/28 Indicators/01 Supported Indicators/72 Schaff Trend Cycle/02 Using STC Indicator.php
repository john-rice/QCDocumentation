<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasAutomaticIndicatorHelper = true;
$helperPrefix = '';
$typeName = 'SchaffTrendCycle';
$helperName = 'STC';
$helperArguments = 'symbol, 5, 10, 20, MovingAverageType.Exponential';
$properties = array();
$updateParameterType = 'time/number pair, or an <code>IndicatorDataPoint</code>';
$constructorArguments = '5, 10, 20, MovingAverageType.Exponential';
$updateParameterValue = 'bar.EndTime, bar.Close';
$hasMovingAverageTypeParameter = True;
$constructorBox = 'schaff-trend-cycle';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>
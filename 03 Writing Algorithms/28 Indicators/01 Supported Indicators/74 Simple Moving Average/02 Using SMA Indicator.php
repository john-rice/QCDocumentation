<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasAutomaticIndicatorHelper = true;
$typeName = 'SimpleMovingAverage';
$helperName = 'SMA';
$helperArguments = '"SPY", 20';
$properties = array("RollingSum");
$updateParameterType = 'time/number pair, or an <code>IndicatorDataPoint</code>';
$constructorArguments = '20';
$updateParameterValue = 'bar.EndTime, bar.Close';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'simple-moving-average';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>
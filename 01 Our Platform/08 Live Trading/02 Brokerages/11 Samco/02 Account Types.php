<p>Samco supports cash and margin accounts.</p>

<?php echo file_get_contents(DOCS_RESOURCES."/brokerages/set-brokerage-model/samco.html"); ?>

<p>Samco only supports trading in Indian Rupees.</p>
<div class="section-example-container">
    <pre class="csharp">SetAccountCurrency("INR");</pre>
    <pre class="python">self.SetAccountCurrency("INR")</pre>
</div>

<h4>Create an Account</h4>
<p>Follow the <a rel="nofollow" target="_blank" href="https://www.samco.in/register">account creation wizard</a> on the Samco website to create a Samco account.</p>

<h4>Paper Trading</h4>
<p>Samco doesn't support paper trading.</p>
<p>The <code>DataNormalizationMode</code> setting is an enumeration that defines how historical data is adjusted. This setting is only applicable for US Equities and Futures.

<h4>US Equities</h4>

<p>In the case of US Equities, the data normalization mode affects how historical data is adjusted for <a href='/docs/v2/writing-algorithms/securities/asset-classes/us-equity/corporate-actions'>corporate actions</a>. To view all the available options, see <a href='/docs/v2/writing-algorithms/securities/asset-classes/us-equity/requesting-data#11-Data-Normalization'>Data Normalization</a>. The default value is <code>DataNormalizationMode.Adjusted</code>. To change the data normalization mode, in the <a href='/docs/v2/writing-algorithms/initialization'>Initialize</a> method, adjust the algorithm's <code>UniverseSettings</code> before you add the universe.</p>

<div class="section-example-container">
    <pre class="csharp">UniverseSettings.DataNormalizationMode = DataNormalizationMode.Raw;
AddUniverse(Universe.DollarVolume.Top(50));</pre>
    <pre class="python">self.UniverseSettings.DataNormalizationMode = DataNormalizationMode.Raw
self.AddUniverse(self.Universe.DollarVolume.Top(50))</pre>
</div>

<h4>Futures</h4>
<p>In the case of Futures, the data normalization mode affects how historical data of two contracts is stitched together to form the <a href='/docs/v2/writing-algorithms/universes/futures#12-Continous-Contracts'>continuous contract</a>. To view all the available options, see <a href='/docs/v2/writing-algorithms/securities/asset-classes/futures/requesting-data#09-Data-Normalization'>Data Normalization</a>. The default value is <code>DataNormalizationMode.Adjusted</code>. To change the data normalization mode, in the <a href='/docs/v2/writing-algorithms/initialization'>Initialize</a> method, pass a <code>dataNormalizationMode</code> argument to the <code>AddFuture</code> method.</p>

<div class="section-example-container">
    <pre class="csharp">AddFuture(Futures.Currencies.BTC, dataNormalizationMode: DataNormalizationMode.BackwardsRatio);</pre>
    <pre class="python">self.AddFuture(Futures.Currencies.BTC, dataNormalizationMode=DataNormalizationMode.BackwardsRatio)</pre>
</div>

<p>The <code>FutureUniverseSelectionModel</code> selects all the contracts for a set of Futures you specify. To use this model, provide a <code>refreshInterval</code> and a selector function. The <code>refreshInterval</code><code></code> defines how frequently LEAN calls the selector function. The selector function receives a <code class="csharp">DateTime</code><code class="python">datetime</code> object that represents the current Coordinated Universal Time (UTC) and returns a list of <code>Symbol</code> objects. The <code>Symbol</code> objects you return from the selector function are the Futures of the universe.</p>

<div class="section-example-container">
	<pre class="csharp">AddUniverseSelection(new FutureUniverseSelectionModel(refreshInterval, futureChainSymbolSelector));</pre>
	<pre class="python">from Selection.FutureUniverseSelectionModel import FutureUniverseSelectionModel

self.AddUniverseSelection(FutureUniverseSelectionModel(refreshInterval, futureChainSymbolSelector))</pre>
</div>

<p>The following table describes the arguments the model accepts:</p>

<table class="qc-table table">
    <thead>
        <tr>
            <th>Argument</th>
            <th>Data Type</th>
            <th>Description</th>
            <th>Default Value</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>refreshInterval</code></td>
	    <td><code class="csharp">TimeSpan</code><code class="python">timedelta</code></td>
            <td>Time interval between universe refreshes</td>
            <td></td>
        </tr>
        <tr>
            <td><code>futureChainSymbolSelector</code></td>
	    <td><code class="csharp">Func&lt;DateTime, IEnumerable&lt;Symbol&gt;&gt;</code><code class="python">Callable[datetime, List[Symbol]]</code></td>
            <td>A function that selects the Future symbols<br></td>
            <td></td>
        </tr>
        <tr>
            <td><code>universeSettings</code></td>
	    <td><code>UniverseSettings</code></td>
            <td>Universe settings define attributes of created subscriptions, such as their resolution and the minimum time in universe before they can be removed</td>
            <td><code class="csharp">null</code><code class="python">None</code></td>
        </tr>
    </tbody>
</table>

<p>If you don't provide a <code>universeSettings</code> argument, the <code>algorithm.UniverseSettings</code> is used by default.</p>

<div class="section-example-container">
	<pre class="csharp">public override void Initialize()
{
    AddUniverseSelection(
        new FutureUniverseSelectionModel(TimeSpan.FromDays(1), SelectFutureChainSymbols)
    );
}

private static IEnumerable&lt;Symbol&gt; SelectFutureChainSymbols(DateTime utcTime)
{
    return new[] {
        QuantConnect.Symbol.Create(Futures.Indices.SP500EMini, SecurityType.Future, Market.CME),
        QuantConnect.Symbol.Create(Futures.Metals.Gold, SecurityType.Future, Market.COMEX)
    };
}</pre>
	<pre class="python">from Selection.FutureUniverseSelectionModel import FutureUniverseSelectionModel

def Initialize(self) -&gt; None:
    universe = FutureUniverseSelectionModel(timedelta(days=1), self.future_chain_symbol_selector)
    self.SetUniverseSelection(universe)

def future_chain_symbol_selector(self, utc_time: datetime) -&gt; List[Symbol]:
    return [ Symbol.Create(Futures.Indices.SP500EMini, SecurityType.Future, Market.CME),
             Symbol.Create(Futures.Metals.Gold, SecurityType.Future, Market.COMEX) ]</pre>
</div>

<p>To view the implementation of this model, see the <span class="csharp"><a target="_blank" rel="nofollow" href="https://github.com/QuantConnect/Lean/blob/master/Algorithm.Framework/Selection/FutureUniverseSelectionModel.cs">LEAN GitHub repository</a></span><span class="python"><a target="_blank" rel="nofollow" href="https://github.com/QuantConnect/Lean/blob/master/Algorithm.Framework/Selection/FutureUniverseSelectionModel.py">LEAN GitHub repository</a></span>.</p>


<p>This model uses the default Future contract filter, which doesn't select any Futures contracts. To use a different filter, subclass the <code>FutureUniverseSelectionModel</code> and define a <code>Filter</code> method. The <code>Filter</code> method accepts and returns a <code>FutureFilterUniverse</code> object to select the Futures contracts. The following table describes the filter methods of the <code>FutureFilterUniverse</code> class:</p>

<?php echo file_get_contents(DOCS_RESOURCES."/universes/future/future-filter-universe.html");?>
	
<p>Depending on how you define the contract filter, LEAN may call it once a day or at every time step. For a full example of a <code>FutureUniverseSelectionModel</code> subclass, see the <a target="_blank" rel="nofollow" href="https://github.com/QuantConnect/Lean/blob/master/Algorithm.Python/BasicTemplateFuturesFrameworkAlgorithm.py">BasicTemplateFuturesFrameworkAlgorithm</a>.</p>
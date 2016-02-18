  <!-- Main Content -->
  <section class="content-wrap">


    <!-- Breadcrumb -->
    <div class="page-title">

      <div class="row">
        <div class="col s12 m9 l10">
          <h1>Cards</h1>

          <ul>
            <li>
              <a href="#"><i class="fa fa-home"></i> Home</a>  <i class="fa fa-angle-right"></i>
            </li>

            <li><a href='dashboard.html'>Dashboard</a>  <i class='fa fa-angle-right'></i>
            </li>
            <li><a href='#'>UI</a>  <i class='fa fa-angle-right'></i>
            </li>
            <li><a href='ui-cards.html'>Cards</a>
            </li>
          </ul>
        </div>
        <div class="col s12 m3 l2 right-align">
          <a href="#!" class="btn grey lighten-3 grey-text z-depth-0 chat-toggle"><i class="fa fa-comments"></i></a>
        </div>
      </div>

    </div>
    <!-- /Breadcrumb -->

    You can use cards for place your content.

    <!-- Base -->
    <h4>Base</h4>
    <div class="row">
      <div class="col l6 s12">
        <div class="card-panel">Card Panel</div>
      </div>
      <div class="col l6 s12">
        <pre class="prettyprint linenums no-margin white">
&lt;div class="card-panel">Card Panel&lt;/div></pre>
      </div>
    </div>
    <!-- /Base -->

    <!-- Colored -->
    <h4>Colored</h4>
    <div class="row">
      <div class="col l6 s12">
        <div class="card-panel blue white-text">Blue Card Panel</div>
        <br>
        <div class="card-panel red white-text">Red Card Panel</div>
        <br>
        <div class="card-panel teal white-text">Teal Card Panel</div>
      </div>
      <div class="col l6 s12">
        <pre class="prettyprint linenums no-margin white">
&lt;div class="card-panel blue white-text">Blue Card Panel&lt;/div>
&lt;br>
&lt;div class="card-panel red white-text">Red Card Panel&lt;/div>
&lt;br>
&lt;div class="card-panel teal white-text">Teal Card Panel&lt;/div></pre>
      </div>
    </div>
    <!-- /Colored -->

    <!-- With Title -->
    <h4>With Title</h4>
    <div class="row">
      <div class="col l6 s12">
        <div class="card">
          <div class="title">
            <h5>Title</h5>
          </div>
          <div class="content">Content</div>
        </div>
      </div>
      <div class="col l6 s12">
        <pre class="prettyprint linenums no-margin white">
&lt;div class="card">
  &lt;div class="title">
    &lt;h5>Title&lt;/h5>
  &lt;/div>
  &lt;div class="content">Content&lt;/div>
&lt;/div></pre>
      </div>
    </div>
    <!-- /With Title -->

    <!-- With Minimize Button -->
    <h4>With Minimize Button</h4>
    <div class="row">
      <div class="col l6 s12">
        <div class="card">
          <div class="title">
            <h5>Title</h5>
            <a class="minimize" href="#">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
          <div class="content">Content</div>
        </div>
      </div>
      <div class="col l6 s12">
        <pre class="prettyprint linenums no-margin white">
&lt;div class="card">
  &lt;div class="title">
    &lt;h5>Title&lt;/h5>
    &lt;a class="minimize" href="#">
      &lt;i class="mdi-navigation-expand-less">&lt;/i>
    &lt;/a>
  &lt;/div>
  &lt;div class="content">Content&lt;/div>
&lt;/div></pre>
      </div>
    </div>
    <!-- /With Minimize Button -->

    <!-- With Close Button -->
    <h4>With Close Button</h4>
    <div class="row">
      <div class="col l6 s12">
        <div class="card">
          <div class="title">
            <h5>Title</h5>
            <a class="close" href="#">
              <i class="mdi-content-clear"></i>
            </a>
          </div>
          <div class="content">Content</div>
        </div>
      </div>
      <div class="col l6 s12">
        <pre class="prettyprint linenums no-margin white">
&lt;div class="card">
  &lt;div class="title">
    &lt;h5>Title&lt;/h5>
    &lt;a class="close" href="#">
      &lt;i class="mdi-content-clear">&lt;/i>
    &lt;/a>
  &lt;/div>
  &lt;div class="content">Content&lt;/div>
&lt;/div></pre>
      </div>
    </div>
    <!-- /With Close Button -->

    <!-- Full -->
    <h4>Full</h4>
    <div class="row">
      <div class="col l6 s12">
        <div class="card">
          <div class="title">
            <h5>Title</h5>
            <a class="close" href="#">
              <i class="mdi-content-clear"></i>
            </a>
            <a class="minimize" href="#">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
          <div class="content">Content</div>
        </div>
      </div>
      <div class="col l6 s12">
        <pre class="prettyprint linenums no-margin white">
&lt;div class="card">
  &lt;div class="title">
    &lt;h5>Title&lt;/h5>
    &lt;a class="close" href="#">
      &lt;i class="mdi-content-clear">&lt;/i>
    &lt;/a>
    &lt;a class="minimize" href="#">
      &lt;i class="mdi-navigation-expand-less">&lt;/i>
    &lt;/a>
  &lt;/div>
  &lt;div class="content">Content&lt;/div>
&lt;/div></pre>
      </div>
    </div>
    <!-- /Full -->


    <!-- Sortable -->
    <h4>Sortable</h4>
    Use <code>sortable</code> classname for enable Sortable plugin on card.

    <div class="row sortable">
      <div class="col l2 m6 s12">
        <div class="card-panel blue white-text">
          Card 1
        </div>
      </div>
      <div class="col l2 m6 s12">
        <div class="card-panel blue white-text">
          Card 2
        </div>
      </div>
      <div class="col l2 m6 s12">
        <div class="card-panel blue white-text">
          Card 3
        </div>
      </div>
      <div class="col l2 m6 s12">
        <div class="card-panel blue white-text">
          Card 4
        </div>
      </div>
      <div class="col l2 m6 s12">
        <div class="card-panel blue white-text">
          Card 5
        </div>
      </div>
      <div class="col l2 m6 s12">
        <div class="card-panel blue white-text">
          Card 6
        </div>
      </div>
    </div>
    <pre class="prettyprint linenums white">
&lt;div class="row sortable">

  &lt;div class="col l2 m6 s12">
    &lt;div class="card-panel">
      Card 1
    &lt;/div>
  &lt;/div>
  
  &lt;div class="col l2 m6 s12">
    &lt;div class="card-panel">
      Card 2
    &lt;/div>
  &lt;/div>
  ...
&lt;/div></pre>
    <!-- /Sortable -->

  </section>
  <!-- /Main Content -->
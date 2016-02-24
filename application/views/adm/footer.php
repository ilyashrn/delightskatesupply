<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
  <a class="btn-floating btn-large red">
    <i class="large mdi-editor-mode-edit"></i>
  </a>
  <ul>
    <li><a class="btn-floating red"><i class="large fa fa-user"></i></a></li>
    <li><a class="btn-floating yellow darken-1"><i class="large mdi-image-grid-on"></i></a></li>
    <li><a class="btn-floating green"><i class="large fa fa-image (alias)"></i></a></li>
  </ul>
</div>

<footer>&copy; 2016 <strong>ily</strong>. All rights reserved.
  </footer>

  <!-- Main -->
  <script type="text/javascript" src="<?php echo base_url()?>assets/_con/js/_con.min.js"></script>

  <!-- dropzone -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/dropzone/dropzone.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url();?>assets/jquery-input-mask/jquery.inputmask.bundle.min.js"></script>

  <!-- Materialize -->
  <script type="text/javascript" src="<?php echo base_url()?>assets/materialize/js/materialize.min.js"></script>

  <script>
    function makeFileList() {
      //get the input and UL list
      var input = document.getElementById('filesToUpload');
      var list = document.getElementById('fileList');

      //empty list for now...
      while (list.hasChildNodes()) {
        list.removeChild(list.firstChild);
      }

      //for every file...
      for (var x = 0; x < input.files.length; x++) {
        //add to list
        var li = document.createElement('li');
        li.innerHTML = '<b>Photo ' + (x + 1) + '</b>:  ' + input.files[x].name;
        list.appendChild(li);
      }
    }
  </script>


</body>

</html>
<!-- jQuery 2.2.3 -->
<script src="{{ asset('admin/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>

<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<!-- SlimScroll -->
<script src="{{ asset('admin/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/app.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/dist/js/demo.js') }}"></script>

<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.js"></script>
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>


 <script type="text/javascript">
      tinymce.init({
        /* replace textarea having class .tinymce with tinymce editor */
        selector: "textarea",
        plugins: "image",
        image_class_list: [
        {title: 'None', value: ''},
        {title: 'Lightbox', value: 'lightbox'},
    ],
        relative_urls: false,
        remove_script_host : false,
        image_caption: true,
        document_base_url : "{{asset('/')}}",

        
        /* theme of the editor */
        theme: "modern",
        skin: "lightgray",
        
        /* width and height of the editor */
        width: "100%",
        height: 400,
        /* display statusbar */
        statubar: true,
        content_style: ".mce-content-body {font-size:16px;}",
        
        
        /* plugin */
        plugins: [
          "advlist autolink link image lists charmap print preview hr anchor pagebreak",
          "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
          "save table contextmenu directionality emoticons imagetools template paste textcolor"
        ],

        /* toolbar */
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons | sizeselect  | fontselect |  fontsizeselect",
        
        fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
        
        /* style */
        style_formats: [
            
          {title: "Headers", items: [
            {title: "Header 1", format: "h1"},
            {title: "Header 2", format: "h2"},
            {title: "Header 3", format: "h3"},
            {title: "Header 4", format: "h4"},
            {title: "Header 5", format: "h5"},
            {title: "Header 6", format: "h6"}
          ]},
          {title: "Inline", items: [
            {title: "Bold", icon: "bold", format: "bold"},
            {title: "Italic", icon: "italic", format: "italic"},
            {title: "Underline", icon: "underline", format: "underline"},
            {title: "Strikethrough", icon: "strikethrough", format: "strikethrough"},
            {title: "Superscript", icon: "superscript", format: "superscript"},
            {title: "Subscript", icon: "subscript", format: "subscript"},
            {title: "Code", icon: "code", format: "code"}
          ]},
          {title: "Blocks", items: [
            {title: "Paragraph", format: "p"},
            {title: "Blockquote", format: "blockquote"},
            {title: "Div", format: "div"},
            {title: "Pre", format: "pre"}
          ]},
          {
            title: 'Image Left',
            selector: 'img',
            styles: {
                'float': 'left',
                'margin': '0 10px 0 10px'
            }
        },
        {
            title: 'Image Right',
            selector: 'img',
            styles: {
                'float': 'right',
                'margin': '0 10px 0 10px'
            }
        }
        ],
        file_browser_callback : elFinderBrowser,

    //     images_upload_handler: function (blobInfo, success, failure) {
    //        var xhr, formData;
    //        xhr = new XMLHttpRequest();
    //        xhr.withCredentials = false;
    //        xhr.open('POST', '/home/profile/about/img');
    //        var token = '{{ csrf_token() }}';
    //        xhr.setRequestHeader("X-CSRF-Token", token);
    //        xhr.onload = function() {
    //            var json;
    //            if (xhr.status != 200) {
    //                failure('HTTP Error: ' + xhr.status);
    //                return;
    //            }
    //            json = JSON.parse(xhr.responseText);
              
    //            if (!json || typeof json.location != 'string') {
    //                failure('Invalid JSON: ' + xhr.responseText);
    //                return;
    //            }
    //            success(json.location);
    //        };
    //        formData = new FormData();
    //        formData.append('file', blobInfo.blob(), blobInfo.filename());
    //        xhr.send(formData);
    //    }
    
        // external_filemanager_path:"{{ asset('files/filemanager') }}/",
        // external_plugins: { "filemanager" : "{{ asset('files/filemanager/plugin.min.js') }}"},
      });

   function elFinderBrowser (field_name, url, type, win) {
  tinymce.activeEditor.windowManager.open({
    file: '<?= route('elfinder.tinymce4') ?>',// use an absolute path!
    title: 'elFinder 2.0',
    width: 900,
    height: 450,
    resizable: 'yes'
  }, {
    setUrl: function (url) {
      win.document.getElementById(field_name).value = url;
    }
  });
  return false;
}


    </script>
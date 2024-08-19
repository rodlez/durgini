tinymce.init({
    selector: '#tinymcetest',  // change this value according to your HTML
    license_key: 'gpl',
    plugins: 'image',
    toolbar: 'image',
    image_list: [
      { title: 'My image 1', value: 'https://www.example.com/my1.gif' },
      { title: 'My image 2', value: 'http://www.moxiecode.com/my2.gif' }
    ]
  });
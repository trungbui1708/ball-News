/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
 CKEDITOR.config.enterMode = CKEDITOR.ENTER_BR
    CKEDITOR.config.forcePasteAsPlainText = true
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
  config.autoParagraph = false;
  config.shiftEnterMode = CKEDITOR.ENTER_P;
	config.entities = false;
  config.basicEntities = false;
	config.htmlEncodeOutput = false;
  config.entities_latin = false;
  config.ForceSimpleAmpersand = true;
	config.filebrowserBrowseUrl = 'ckfinder/browse.php?opener=ckeditor&type=files';
   config.filebrowserImageBrowseUrl = 'ckfinder/browse.php?opener=ckeditor&type=images';
   config.filebrowserFlashBrowseUrl = 'ckfinder/browse.php?opener=ckeditor&type=flash';
   config.filebrowserUploadUrl = 'ckfinder/upload.php?opener=ckeditor&type=files';
   config.filebrowserImageUploadUrl = 'ckfinder/upload.php?opener=ckeditor&type=images';
   config.filebrowserFlashUploadUrl = 'ckfinder/upload.php?opener=ckeditor&type=flash';
// ...
};

<?php
class ModelToolImage extends Model {
	public function resize($filename, $new_width, $new_height) {
		if (!is_file(DIR_IMAGE . $filename)) {
			return;
		}
        $image_info = GetImageSize('image/'.$filename);
        //var_dump($image_info); exit;
        $width = $image_info[0];
        $height = $image_info[1];
        $mime = $image_info['mime'];
		$extension = pathinfo($filename, PATHINFO_EXTENSION);
        
        if (isset($new_width))
        {
            $factor = (float)$new_width / (float)$width;
            $new_height = $factor * $height;
        }
        else if (isset($new_height))
        {
            $factor = (float)$new_height / (float)$height;
            $new_width = $factor * $width;
        }
        else{
            
        }

		$old_image = $filename;
		$new_image = 'cache/' . utf8_substr($filename, 0, utf8_strrpos($filename, '.')) . '-' . $new_width . 'x' . $new_height . '.' . $extension;

		if (!is_file(DIR_IMAGE . $new_image) || (filectime(DIR_IMAGE . $old_image) > filectime(DIR_IMAGE . $new_image))) {
			$path = '';

			$directories = explode('/', dirname(str_replace('../', '', $new_image)));

			foreach ($directories as $directory) {
				$path = $path . '/' . $directory;

				if (!is_dir(DIR_IMAGE . $path)) {
					@mkdir(DIR_IMAGE . $path, 0777);
				}
			}

			list($width_orig, $height_orig) = getimagesize(DIR_IMAGE . $old_image);

			if ($width != $new_width || $height != $new_height) {
				$image = new Image(DIR_IMAGE . $old_image);
				$image->resize($new_width, $new_height);
				$image->save(DIR_IMAGE . $new_image);
			} else {
				copy(DIR_IMAGE . $old_image, DIR_IMAGE . $new_image);
			}
		}

		if ($this->request->server['HTTPS']) {
			return $this->config->get('config_ssl') . 'image/' . $new_image;
		} else {
			return $this->config->get('config_url') . 'image/' . $new_image;
		}
	}
}

<?php
/**
 * @Copyright (c) 2018, sunny-daisy 
 * All Rights Reserved.
 *
 * public methods related to video image
 *
 * @author  yanmin1 <yanmin1@staff.sina.com.cn>
 * @cdate   Wed Jul 25 14:41:31 CST 2018
 */
namespace Daisy\Video;

class ImageName
{
    /*
     * Get different size of image by video_id
     *
     * @param   int     $id: video_id
     * @param   string  $type:
     * @param   string  $extension: not all extensions are supported
     * 
     * @return  string  s3 key
     */
    public function getImageNameById(int $id, string $type, string $extension = 'jpg') 
    {
        $path = $this->getEqualPathById($id);

        switch ($type) {
            case 'original':
                $format = '%s%s.%s';
                break;
            case 'large':
                $format = '%s%s_1.%s';
                break;
            case 'medium':
                $format = '%s%s_2.%s';
                break;
            case 'small':
                $format = '%s%s_3.%s';
                break;
            case '400_300':
                $format = '%s%s_400_300.%s';
                break;
            case '120_90':
                $format = '%s%s_120_90.%s';
                break;
            case '432_243':
                $format = '%s%s_432_243.%s';
                break;
            case '220_124':
                $format = '%s%s_220_124.%s';
                break;
            case '180_101':
                $format = '%s%s_180_101.%s';
                break;
            case '160_90':
                $format = '%s%s_160_90.%s';
                break;
            case '128_72':
                $format = '%s%s_128_72.%s';
                break;
            default:
                $format = '%s%s.%s';
        }

        return sprintf($format, $path, $id, $extension);
    }


    /**
     * Get path by video_id
     *
     * @param   int     $id: video_id
     *
     * @return  string 
     */
    private function getEqualPathById(int $id = 0) 
    {
        $step = 3;
        $seperator = '/';
        $length = strlen($id);
        $remainder = $length % $step;
        if ($remainder != 0) {
            $length += $step - $remainder;
            $id = str_pad($id, $length, '0', STR_PAD_LEFT);
        }
        return chunk_split($id, $step, $seperator);
    }
    

}


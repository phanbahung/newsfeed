<?php
/**
 * Pagination basic created by toidicode.com
 *
 *
 * @package    Pagination basic
 * @author    ThanhTai - ToiDiCodeTeam
 * @copyright    Copyright (c) 2017, Toidicode Team. (http://toidicode.com/)
 * @link    https://toidicode.com
 * @since    Version 1.0.0
 * @filesource
 */
class Pagination
{
    /**
     * Biến config chứa tất cả các cấu hình
     * @var array
     */
    private $config = [
        'total'       => 0,
        'limit'       => 0,
        'full'        => false,
        'querystring' => 'page',
        'link_self'=>''
    ];
    /**
     * khởi tạo
     * @param array $config
     */
    public function __construct($config = [])
    {
        if (isset($config['limit']) && $config['limit'] < 0 || isset($config['total']) && $config['total'] < 0) {
            die('limit và total không được nhỏ hơn 0');
        }
        
        if (!isset($config['querystring'])) {
            $config['querystring'] = 'page';
        }
        
        $this->config = $config;
    }
    /**
     * Lấy ra tổng số trang
     * @return int
     */
    private function gettotalPage()
    {
        return ceil($this->config['total'] / $this->config['limit']);
    }
    
    /**
     * Lấy ra trang hiện tại
     * @return int
     */
    private function getCurrentPage()
    {
        if (isset($_GET[$this->config['querystring']]) && (int) $_GET[$this->config['querystring']] >= 1) {
            
            if ((int) $_GET[$this->config['querystring']] > $this->gettotalPage()) {
                return (int) $this->gettotalPage();
            } else {
                return (int) $_GET[$this->config['querystring']];
            }
            
        } else {
            return 1;
        }
    }
    
    /**
     * lấy ra trang phía trước
     * @return string
     */
    private function getPrePage()
    {
        if ($this->getCurrentPage() === 1) {
            return '<li><i class="fa fa-chevron-left" style ="background-color: lightgray;"></i></li>';
        } else {
            return '<li><a href="' .  $this->config['link_self'] . '&' . $this->config['querystring'] . '=' . ($this->getCurrentPage() - 1) . '" ><i class="fa fa-chevron-left"></i></a></li>';
        }
    }
    
    /**
     * Lấy ra trang phía sau
     * @return string
     */
    private function getNextPage()
    {
        if ($this->getCurrentPage() >= $this->gettotalPage()) {
            return '<li><i class="fa fa-chevron-right" style ="background-color: lightgray;"></i></li>';
        } else {
            return '<li><a href="' .  $this->config['link_self'] . '&' . $this->config['querystring'] . '=' . ($this->getCurrentPage() + 1) . '" ><i class="fa fa-chevron-right"></i></a></li>';
        }
    }
    
    /**
     * Hiển thị html code của page
     * @return string
     */
    public function getPagination()
    {
        $data = '';
        
        if (isset($this->config['full']) && $this->config['full'] === false) {
            $data .= ($this->getCurrentPage() - 3) > 1 ? '<li>...</li>' : '';
            
            for ($i = ($this->getCurrentPage() - 3) > 0 ? ($this->getCurrentPage() - 3) : 1; $i <= (($this->getCurrentPage() + 3) > $this->gettotalPage() ? $this->gettotalPage() : ($this->getCurrentPage() + 3)); $i++) {
                
                if ($i === $this->getCurrentPage()) {
                    $data .= '<li><span class="current" style="border: solid 1px; padding: 4px 8px 8px 8px;">' . $i . '</span></li>';//<span class="current">3</span>
                } else {
                    $data .= '<li><a href="' .  $this->config['link_self'] . '&' . $this->config['querystring'] . '=' . $i . '" >' . $i . '</a></li>';
                }
            }
            
            $data .= ($this->getCurrentPage() + 3) < $this->gettotalPage() ? '<li>...</li>' : '';
        } else {
            for ($i = 1; $i <= $this->gettotalPage(); $i++) {
                
                if ($i === $this->getCurrentPage()) {
                    $data .= '<li><span class="current">' . $i . '</span></li>';
                } else {
                    $data .= '<li><a href="' .  $this->config['link_self'] . '&' . $this->config['querystring'] . '=' . $i . '" >' . $i . '</a></li>';
                }
            }
        }
        
        return '<ul>' . $this->getPrePage() . $data . $this->getNextPage() . '</ul>';
    }
}

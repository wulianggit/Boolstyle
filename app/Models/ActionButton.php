<?php
namespace App\Models;

trait ActionButton {

    /**
     * 查看按钮
     * @param bool $type
     *
     * @return string
     * @author wuliang
     */
    public function getShowButton($type)
    {
        if ($type) {
            return "<a class='blue btn-link margin-right-10' href='".url('admin/'.$this->action.'/'.$this->id)."'>查看</a>";
        } else {
            return "<a class='blue btn-link margin-right-10' data-toggle='modal' data-target='#draggable' href='".url('admin/'.$this->action.'/'.$this->id)."'>查看</a>";
        }
    }

    /**
     * 修改按钮
     * @return string
     * @author wuliang
     */
    public function getEditButton()
    {
        return "<a  class='green btn-link margin-right-10' href='".url('admin/'.$this->action.'/'.$this->id.'/edit')."'>修改</a>";
    }

    /**
     * 删除按钮
     * @return string
     * @author wuliang
     */
    public function getDelButton()
    {
        return '<a class="red btn-link" href="javascript:;" onclick="return false" id="destroy">
            <form action="'.url('admin/'.$this->action.'/'.$this->id).'" method="POST" name="delete_item" style="display:none">
                <input type="hidden" name="_method" value="delete"><input type="hidden" name="_token" value="'.csrf_token().'">
            </form>删除</a>';
    }

    /**
     * @param $type
     * @return string
     * @author wuliang
     */
    public function getActionButton($type = true)
    {
        return $this->getShowButton($type).
               $this->getEditButton().
               $this->getDelButton();
    }
}

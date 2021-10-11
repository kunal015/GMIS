
<form id="lifeline-form-edit" action="" method="" >
    @csrf
    <div class="row" style="margin: 1rem 3rem;">
        <div class="col-sm-8">
            <div class="form-group">
                <label class="control-label">Title</label>
                <input name="life_event" id="life_event" placeholder="Add a high or low point in your life. Keep it short!" type="text" class="mid js_life_event form-control" value="{{$Lifeline['life_event']}}">
                <input type="hidden" name="life_event_id" value="{{$Lifeline['id']}}">
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <div class="row" style="margin: 0rem 3rem 1rem 3rem;">
        <div class="col-sm-4">
            <div class="form-group">
                <label class="control-label">Standard*</label>
                <div class="js_category">
                    <select name="standard" id="standard" data-id="0" class="form-control mb-3 Standard">
                        <option value="" data-id="">Standard</option>
                        <option value="<6" <?php if($Lifeline['standard']=="<6"){ echo "selected";}?>>&lt;6th</option>
                        <option value="6" <?php if($Lifeline['standard']=="6"){ echo "selected";}?>>6th</option>
                        <option value="7" <?php if($Lifeline['standard']=="7"){ echo "selected";}?>>7th</option>
                        <option value="8" <?php if($Lifeline['standard']=="8"){ echo "selected";}?>>8th</option>
                        <option value="9" <?php if($Lifeline['standard']=="9"){ echo "selected";}?>>9th</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-sm-8"></div>
    </div>
    <div class="row" style="margin: 1rem 3rem;">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <button type="button" class="save_add_publish" style="width: 100%;"><i class="fa fa-save icon_save"></i> Save and publish</button>
        </div>
        <div class="col-sm-3"></div>
    </div>
</form>

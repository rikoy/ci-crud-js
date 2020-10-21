<script>
    $(document).ready(function() {});
</script>
<form action="" class="form-horizontal">
    <div class="control-group">
        <label class="control-label" for="username">Username</label>
        <div class="controls">
            <input type="text" class="span6 disabled" id="username" value="Example" disabled>
            <p class="help-block">Your username is for logging in and cannot be changed.</p>
        </div> <!-- /controls -->
    </div> <!-- /control-group -->
    <div class="control-group">
        <div class="controls">
            <button class="btn btn-primary" type="button" onclick="loadListData('crud/list_data')">Back</button>
            <button class="btn btn-primary" type="button">Default button</button>
        </div> <!-- /controls -->
    </div> <!-- /control-group -->
</form>
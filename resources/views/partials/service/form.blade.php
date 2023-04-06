<div class="form-group">
    <label for="label" class="form-label">Label</label>
    <input type="text" name="label" id="label" class="form-control" value="{{ optional($service ?? null)->label }}">
    @error('label')
      <div class="alert alert-danger">{{ $message }}</div>  
    @enderror

</div>
<div class="form-group">
    <label for="price" class="form-label">Price</label>
    <input type="number" name="price" id="price" class="form-control" value="{{ optional($service ?? null)->price }}">
</div>
<div class="form-group">
    <label for="content" class="form-label">Content</label>
    <textarea name="content" id="content" cols="30" rows="4" class="form-control">
        {{ optional($service ?? null)->content }}
    </textarea>
</div>
<div class="form-group">
    <label for="price" class="form-label">Thumbnail</label>
    <input type="file" name="thumbnail" id="thumbnail" class="form-control">
</div>
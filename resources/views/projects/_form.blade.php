@csrf
<label for="title">Título del proyecto</label><br>
<input type="text" name="title" id="title" value="{{ old('title', $project->title) }}">
<br>
<label for="url">Url del proyecto</label><br>
<input type="textarea" name="url" id="url" value="{{ old('url', $project->url) }}">
<br>
<label for="description">Descripción</label><br>
<textarea name="description" id="description" cols="22" rows="4">{{ old('description', $project->description) }}</textarea>
<br>
<button type="submit">{{ $btnText }}</button>

@if (Route::is('admin.services.index'))
Project
@elseif(Route::is('admin.services.create'))
Create New Project
@elseif(Route::is('admin.services.edit'))
Edit Project - {{ $service->title }}
@elseif(Route::is('admin.services.show'))
View Project - {{ $service->title }}
@elseif(Route::is('admin.services.trashed'))
Trashed Project
@endif
| Admin Panel -
{{ config('app.name') }}

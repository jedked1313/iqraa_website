{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="{{ __('admin.news') }}" icon="las la-newspaper" :link="backpack_url('news')" />
<x-backpack::menu-item title="{{ __('admin.calendar') }}" icon="las la-calendar" :link="backpack_url('calender')" />
<x-backpack::menu-item title="{{ __('admin.slider') }}" icon="las la-bars" :link="backpack_url('slider')" />
<x-backpack::menu-item title="{{ __('admin.contact') }}" icon="lar la-comment-dots" :link="backpack_url('contact')" />
<x-backpack::menu-item title="{{ __('admin.instructors') }}" icon="las la-chalkboard-teacher" :link="backpack_url('instructors')" />
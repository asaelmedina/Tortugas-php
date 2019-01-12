@extends('admin.layouts.admin')

@section('title', __('Especies'))

@section('content')
    <div class="row">
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Clase</th>
                <th>Subclase</th>
                <th>Orden</th>
                <th>Familia</th>
                <th>Especie</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <div class="pull-right">
            Powered by <a href="http://netlicensing.io/?utm_source=Laravel_Boilerplate&utm_medium=github&utm_campaign=laravel_boilerplate&utm_content=poweredby" target="_blank"/>Labs64 NetLicensing</a>
        </div>
        <div class="pull-right">
            {{ $users->links() }}
        </div>
        <div>
            <h4>How To</h4>
            <ul>
              <li>Manage available membership plans - <a href="https://go.netlicensing.io/console/v2/content/vendor/licensetemplate.xhtml?filterkey=productModuleNumber&filtervalue={{ config('protection.membership.product_module_number') }}" target="_blank"/>NetLicensing Management Console » License Templates</a></li>
              <li>View and manage registered users - <a href="https://go.netlicensing.io/console/v2/content/vendor/licensee.xhtml?filterkey=productNumber&filtervalue={{ config('protection.product_number') }}" target="_blank"/>NetLicensing Management Console » Licensees</a></li>
            </ul>
        </div>
    </div>
@endsection

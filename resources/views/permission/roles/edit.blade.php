@extends('layouts.master')

@section('title', 'Edit Role')

@section('content')

<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>

			</div>
			<div class="ml-md-auto py-2 py-md-0">
			</div>
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Edit Role</div>
                        <a href="{{ route('roles.index') }}" class="btn btn-warning btn-sm ml-auto">Back</a>
 					</div>
				</div>
				<div class="card-body">
                    <form action="{{ route('roles.edit', $role) }}" method="POST">
                        @csrf
                        @method('PUT')

                            @include('permission.roles.partials.form-control',['submit' => 'Update'])

                    </form>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection

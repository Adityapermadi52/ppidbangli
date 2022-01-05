<?= $this->extend('backoffice/template') ?>
<?= $this->section('content') ?>
<style type="text/css">
	.bg-red {
		background-color: red;
		color: #fff;
	}

	.bg-green {
		background-color: green;
		color: #fff;
	}

	.bg-yellow {
		background-color: #ed8e00;
		color: #fff;
	}

	.bg-blue {
		background-color: blue;
		color: #fff;
	}

	.bg-primary {
		color: #000;
	}

	.media {
		padding: 15px;
	}

	.media-left {
		display: table-cell;
    	vertical-align: top;
    	padding-right: 15px;
	}

	.media-body {
		vertical-align: top;
		display: table-cell;
		width: 10000px;
	}

	a:hover, a:focus {
		text-decoration: none;
	}

	.media-body h1 {
		margin: 0px;
	}

	.media-body p {
		font-weight: bolder;
	}

	.dashboard .row {
		padding-top: 15px;
		padding-bottom: 15px;
	}

	.dashboard .row .col-md-3 {
		margin-bottom: 15px;
	}

	div.dashboard h2 {
		margin-bottom: 0px;
	}

	div.dashboard hr {
		margin-top: 0px;
	}
</style>
<div class="container">
    <div class="page-header text-center">
    	<h1>Dashboard</h1>
    </div> 
    <div class="bs-docs-section dashboard">
    	
    </div>
</div>
<?= $this->endSection() ?>
<div class="toastee toastee-{{ $type }}">
    <strong>{{ $title }}</strong>
    <p>{{ $message }}</p>
</div>

<style>
    .toastee {
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 15px;
        border-radius: 5px;
        color: #fff;
        z-index: 9999;
    }

    .toastee-success {
        background-color: #28a745;
    }

    .toastee-error {
        background-color: #dc3545;
    }

    .toastee-warning {
        background-color: #ffc107;
    }

    .toastee-info {
        background-color: #17a2b8;
    }
</style>

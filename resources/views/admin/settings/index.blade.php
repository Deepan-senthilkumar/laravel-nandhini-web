@extends('admin.layout')
@section('title', 'System Settings')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-header bg-white border-bottom-0 pt-4 pb-2 px-4">
                <h5 class="fw-bold mb-0 text-dark"><i class="bi bi-gear-fill text-primary me-2"></i> General Configuration</h5>
            </div>
            <div class="card-body px-4 py-4">
                <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Settings saved completely!');">
                    @csrf
                    
                    <div class="row mb-4">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="form-label fw-semibold text-muted small text-uppercase" style="letter-spacing: 0.5px;">Site Name</label>
                            <input type="text" class="form-control hover-shadow transition-all" value="Nandhini Silks">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-muted small text-uppercase" style="letter-spacing: 0.5px;">Contact Email</label>
                            <input type="email" class="form-control hover-shadow transition-all" value="support@nandhinisilks.com">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold text-muted small text-uppercase" style="letter-spacing: 0.5px;">Currency Symbol</label>
                        <select class="form-select hover-shadow transition-all w-50">
                            <option value="INR" selected>₹ (INR - Indian Rupee)</option>
                            <option value="USD">$ (USD - US Dollar)</option>
                            <option value="EUR">€ (EUR - Euro)</option>
                        </select>
                    </div>

                    <div class="mb-5 pb-3 border-bottom">
                        <label class="form-label fw-semibold text-muted small text-uppercase d-block mb-3" style="letter-spacing: 0.5px;">Feature Flags</label>
                        
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input fs-5 bg-success border-success" type="checkbox" role="switch" id="maintenanceMode">
                            <label class="form-check-label ms-2 mt-1" for="maintenanceMode">Enable Maintenance Mode <span class="badge bg-secondary ms-2 small">Site currently LIVE</span></label>
                        </div>
                        
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input fs-5" type="checkbox" role="switch" id="enableRegistrations" checked>
                            <label class="form-check-label ms-2 mt-1" for="enableRegistrations">Allow New User Registrations</label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary px-5 fw-bold shadow-sm rounded-pill"><i class="bi bi-save me-2"></i> Update Settings</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="card shadow-sm border-0 bg-light">
            <div class="card-body p-4">
                <h6 class="fw-bold text-uppercase text-muted mb-4" style="letter-spacing: 1px;"><i class="bi bi-info-circle me-2"></i> System Info</h6>
                
                <ul class="list-group list-group-flush bg-transparent">
                    <li class="list-group-item bg-transparent d-flex justify-content-between align-items-center border-bottom-0 py-2 px-0">
                        <span class="text-secondary fw-semibold">App Version</span>
                        <span class="badge bg-dark rounded-pill">v1.2.0</span>
                    </li>
                    <li class="list-group-item bg-transparent d-flex justify-content-between align-items-center border-bottom-0 py-2 px-0">
                        <span class="text-secondary fw-semibold">Laravel Framework</span>
                        <span class="badge bg-primary rounded-pill">^11.0</span>
                    </li>
                    <li class="list-group-item bg-transparent d-flex justify-content-between align-items-center border-bottom-0 py-2 px-0">
                        <span class="text-secondary fw-semibold">PHP Version</span>
                        <span class="badge bg-info text-dark rounded-pill">8.2+</span>
                    </li>
                    <li class="list-group-item bg-transparent d-flex justify-content-between align-items-center py-2 px-0">
                        <span class="text-secondary fw-semibold">Database</span>
                        <span class="badge border border-success text-success rounded-pill px-3"><i class="bi bi-check-circle-fill me-1"></i> Connected</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
    .transition-all {
        transition: all 0.2s ease-in-out;
    }
    .hover-shadow:focus, .hover-shadow:hover {
        box-shadow: 0 0.25rem 0.5rem rgba(0,0,0,0.05);
        border-color: #0d6efd;
    }
</style>
@endsection

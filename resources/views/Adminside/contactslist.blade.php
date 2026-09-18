@extends('master.admin') 
@section('title', 'Contact List') 
@section('content') 

<style> 
    /* Allows table scrolling inside containers cleanly */
    .contact-table-wrapper { 
        width: 100%; 
        overflow-x: auto; 
        overflow-y: visible; 
        -webkit-overflow-scrolling: touch; 
        background: #fff;
        border-radius: 0 0 16px 16px;
    } 
    
    /* Sets explicit structural column framework space metrics */
    .contact-table { 
        width: 100%; 
        min-width: 1200px; 
        margin: 0; 
        table-layout: fixed; 
    } 
    
    .contact-table th, .contact-table td { 
        padding: 16px 15px !important; 
        vertical-align: middle; 
    } 
    
    /* Strict layout structural widths to clear email/name columns */ 
    .contact-table th:nth-child(1), .contact-table td:nth-child(1) { width: 60px; } 
    .contact-table th:nth-child(2), .contact-table td:nth-child(2) { width: 180px; } 
    .contact-table th:nth-child(3), .contact-table td:nth-child(3) { width: 240px; } 
    .contact-table th:nth-child(4), .contact-table td:nth-child(4) { width: 200px; } 
    .contact-table th:nth-child(5), .contact-table td:nth-child(5) { width: 320px; } 
    .contact-table th:nth-child(6), .contact-table td:nth-child(6) { width: 190px; } 
    .contact-table th:nth-child(7), .contact-table td:nth-child(7) { width: 190px; } 
    
    /* FIX FOR VISIBILITY: Forces text blocks to drop wrap line levels cleanly */
    .message-cell, .name-cell, .email-cell { 
        white-space: normal !important; 
        word-wrap: break-word;
        overflow-wrap: break-word; 
        word-break: break-word;
    } 
    .name-cell { 
        font-weight: 600; 
        color: var(--text-dark);
    } 

    @media (max-width: 768px) { 
        .contact-table { min-width: 1100px; } 
    } 
</style> 

<!-- Heading Element: Pushed down perfectly by your layout wrappers --> 
<div class="mb-4"> 
    <h2 class="page-title mb-1">Contact List</h2>
    <p class="welcome-text mb-0">All messages received from your website</p>
</div> 

<!-- Contact Card Wrapper Component --> 
<div class="card content-card border-0 mb-4"> 
    <!-- Card Header Section --> 
    <div class="card-header d-flex justify-content-between align-items-center"> 
        <div>
            <h5 class="mb-1"> 
                <i class="bi bi-chat-left-text text-primary me-2"></i> Contact Messages 
            </h5> 
            <small class="text-muted"> {{ $contacts->count() }} total messages </small> 
        </div>
    </div> 
    
    <!-- Table Body Content Grid --> 
    <div class="card-body p-0"> 
        <div class="contact-table-wrapper"> 
            <table class="table table-hover align-middle contact-table"> 
                <thead class="table-light"> 
                    <tr> 
                        <th>#</th> 
                        <th>Name</th> 
                        <th>Email</th> 
                        <th>Subject</th> 
                        <th>Message</th> 
                        <th>Created At</th> 
                        <th>Updated At</th> 
                    </tr> 
                </thead> 
                <tbody> 
                    @forelse($contacts as $contact) 
                    <tr> 
                        <td> {{ $loop->iteration }} </td> 
                        <td class="name-cell"> {{ $contact->name }} </td> 
                        <td class="email-cell"> {{ $contact->email }} </td> 
                        <td> {{ $contact->subject }} </td> 
                        <td class="message-cell"> {{ $contact->message }} </td> 
                        <td> <small class="text-muted"> {{ $contact->created_at?->format('d M Y, h:i A') }} </small> </td> 
                        <td> <small class="text-muted"> {{ $contact->updated_at?->format('d M Y, h:i A') }} </small> </td> 
                    </tr> 
                    @empty 
                    <tr> 
                        <td colspan="7" class="text-center py-5 text-muted"> 
                            <i class="bi bi-envelope-open fs-1 d-block mb-3"></i> 
                            <h5 class="fw-bold"> No Contact Messages </h5> 
                            <p class="mb-0"> No messages have been received yet. </p> 
                        </td> 
                    </tr> 
                    @endforelse 
                </tbody> 
            </table> 
        </div> 
    </div> 
</div>

@endsection

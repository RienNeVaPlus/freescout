{{-- 
    Languages strings and custom variables passed to JS.
    After changing this file make sure to run:
        php artisan freescout:build
--}}
/**
 * This file has been generated by console command: php artisan freescout:generate-vars
 * If you need to make changes, please edit /resources/views/js/vars.js template.
 */
{{-- Global vars for JS. Set in /app/Console/Commands/GenerateJs.php --}}
var Vars = {
    public_url: '{{ config('app.url') }}'
};

{{-- 
    Localized JS strings.
    Usage:
        Lang.get('messages.ajax_error');
        Lang.get('messages.ajax_error', { name: 'Joe' });
--}}
var LangMessages = {
    @foreach ($locales as $locale)
        "{{ $locale }}.messages": {
            {{-- Add here strings which you need to be translated in JS--}}
            "ajax_error": "{{ __("Error occured. Please check your internet connection and try again.") }}",
            "error_occured": "{{ __("Error occured. Please try again later.") }}",
            "upload_attachments": "{{ __("Upload Attachments") }}",
            "saved_replies": "{{ __("Saved Replies") }}",
            "save_draft": "{{ __("Save Draft") }}",
            "discard": "{{ __("Discard") }}",
            "close": "{{ __("Close") }}",
            "cancel": "{{ __("Cancel") }}",
            "settings_saved": "{{ __("Settings saved") }}",
            "insert_var": "{{ __("Insert variable") }}",
            "mailbox": "{{ __("Mailbox") }}",
            "email": "{{ __("Email") }}",
            "name": "{{ __("Name") }}",
            "conversation": "{{ __("Conversation") }}",
            "number": "{{ __("Number") }}",
            "customer": "{{ __("Customer") }}",
            "full_name": "{{ __("Full Name") }}",
            "first_name": "{{ __("First Name") }}",
            "last_name": "{{ __("Last Name") }}",
            "email_addr": "{{ __("Email Address") }}",
            "user": "{{ __("User") }}",
            "confirm_change_customer": "{{ __("Change the customer to :customer_email?") }}",
            "invite_sent": "{{ __("Invite email has been sent") }}",
            "invite_resent": "{{ __("Invite email has been resent") }}",
            "confirm_reset_password": "{{ __("Reset this User's password?") }}",
            "push_protocol_alert": "{{ __("HTTPS protocol is required for the browser push notifications to work.") }}",
            "lost_connection": "{{ __("Lost internet connection") }}",
            "connection_restored": "{{ __("Connection restored") }}",
            "saved": "{{ __("Saved") }}",
            "confirm_discard_draft": "{{ __("Discard this draft?") }}",
            "yes": "{{ __("Yes") }}",
            "confirm_delete_photo": "{{ __("Delete this photo?") }}",
            "delete": "{{ __("Delete") }}",
            "email_sent": "{{ __("Email passed for delivery. If you don't receive a test email, check your mail server logs.") }}",
            "connection_established": "{{ __("Connection established!") }}",
            "confirm_delete_conversation": "{{ __("Delete this conversation?") }}",
            "drag_image_file": "{{ __("Drag image or file here") }}",
            "confirm_delete_module": "{{ __("Delete this module?") }}",
            "confirm_update": "{{ __("Please backup application files and database before you continue.") }}",
            "remove_format": "{{ __("Remove Formatting") }}",
            "list": "{{ __("List") }}",

            "update": "{{ __("Update") }}"
        }@if (!$loop->last),@endif
    @endforeach
};

(function () {
    Lang = new Lang();
    Lang.setMessages(LangMessages);
})();
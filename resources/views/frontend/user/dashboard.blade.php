@extends('frontend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <x-frontend.card>
                    <x-slot name="header">
                        @lang('Dashboard')
                    </x-slot>

                    <x-slot name="body">
                    <nav>
                        
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                               
                                <x-utils.link
                                
                                    :text="__('download')"
                                    class="nav-link active"
                                    id="download-tab"
                                    data-toggle="pill"
                                    href="#my-download"
                                    role="tab"
                                    aria-controls="my-download"
                                    aria-selected="true"
                                     />
                                    

                                <x-utils.link
                                    :text="__('upload')"
                                    class="nav-link"
                                    id="upload-tab"
                                    data-toggle="pill"
                                    href="#upload"
                                    role="tab"
                                    aria-controls="upload"
                                    aria-selected="false"/>

                               
                            </div>
                        </nav>

                        <div class="tab-content" id="dashboard-tab-tabsContent">

                            <div class="tab-pane fade pt-3 show active " id="my-download" role="tabpanel"  aria-labelledby="download-tab" >
                                @include('frontend.user.file.download')
                            </div><!--tab-profile-->
                            <div class="tab-pane fade pt-3 " id="upload" role="tabpanel" aria-labelledby="upload-tab">
                                @include('frontend.user.file.upload')
                            </div><!--tab-information-->
                           
                        </div>
                          
                    </x-slot>
                   
                
                </x-frontend.card>
            </div><!--col-md-10-->
        </div><!--row-->
    </div><!--container-->
@endsection

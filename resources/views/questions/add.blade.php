<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Question') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Select Year</label>
                            <select class="form-control">
                                    <option>2023</option>
                                    <option>2022</option>
                                    <option>2021</option>
                                    <option>2020</option>
                                    <option>2019</option>
                            </select>

                        </div>
                        <div class="col-md-6">
                            <label>Select Exam</label>
                            <select class="form-control">
                                    <option>RAS</option>
                                    <option>Patwari</option>
                                    <option>REET</option>
                                    <option>Constable</option>
                                    <option>Information Assistant</option>
                            </select>
                        </div>
                    </div>
                        
                        
                        

                        <label>Question</label>
                        <input type="text" name="question" class="form-control">

                        <label>Select answer type</label>
                        <select class="form-control">
                                <option>Objective</option>
                                <option>Theortical</option>
                        </select>
                        
                        <label>Answer</label>   
                        <textarea class="form-control" col="4"></textarea>

                        <input type="submit" name="submit" value="Add" class="btn btn-success m-2">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

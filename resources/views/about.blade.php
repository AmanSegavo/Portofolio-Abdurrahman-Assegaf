@extends('layouts.app')

@section('title', 'About - Portofolio Abdurrahman Assegaf')

@section('content')
<div class="text-center about-container">
    <p class="about-description">A <span class="highlight">Fullstack Web Developer</span> & <span class="highlight">Data Analyst</span> who loves coding, AI, and solving problems with technology.</p>

    <div class="about-info">
        <div class="card-info">
            <h4>Skills</h4>
            <div class="skills-icon">
                <i class="devicon-python-plain colored"></i>
                <i class="devicon-laravel-plain colored"></i>
                <i class="devicon-django-plain colored"></i>
                <i class="devicon-postgresql-plain colored"></i>
                <i class="devicon-jupyter-plain colored"></i>
            </div>
        </div>
        <div class="card-info">
            <h4>Experience</h4>
            <p>Freelance Web Developer & Data Analyst</p>
        </div>
        <div class="card-info">
            <h4>Projects</h4>
            <p>Community Research Platform, AI Chatbot, School Management System</p>
        </div>
    </div>

    <a href="/projects" class="btn btn-futuristic">View My Projects</a>
</div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.js"></script>
@endsection

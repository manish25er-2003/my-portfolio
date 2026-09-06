<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class PortfolioController extends Controller
{
    public function index()
    {
        // Featured Projects Data
        $projects = [
            [
                'title' => 'Laravel E-Commerce Platform',
                'featured' => true,
                'description' => 'A full-featured online store with product management, shopping cart, Stripe payments, order tracking, and admin dashboard built with Laravel and MySQL.',
                'image' => 'https://images.unsplash.com/photo-1556742049-0a67d264426d?q=80&w=600&auto=format&fit=crop',
                'tags' => ['Laravel', 'PHP', 'MySQL', 'Stripe', 'Bootstrap'],
                'demo' => 'https://example.com',
                'github' => 'https://github.com'
            ],
            [
                'title' => 'REST API — Task Management',
                'featured' => true,
                'description' => 'RESTful API with JWT authentication, role-based access control, task assignments, notifications, and real-time status updates for teams.',
                'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=600&auto=format&fit=crop',
                'tags' => ['Laravel', 'REST API', 'Sanctum', 'MySQL'],
                'demo' => 'https://example.com',
                'github' => 'https://github.com'
            ],
            [
                'title' => 'Hospital Management System',
                'featured' => false,
                'description' => 'Comprehensive system for managing patients, doctors, appointments, prescriptions, and billing with role-based dashboards.',
                'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=600&auto=format&fit=crop',
                'tags' => ['Laravel', 'PHP', 'MySQL', 'Bootstrap'],
                'demo' => 'https://example.com',
                'github' => 'https://github.com'
            ],
            [
                'title' => 'School Management Portal',
                'featured' => false,
                'description' => 'Manages student enrollment, attendance tracking, grade management, parent communication, and fee collection with exportable reports.',
                'image' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?q=80&w=600&auto=format&fit=crop',
                'tags' => ['Laravel', 'JavaScript', 'MySQL', 'Bootstrap'],
                'demo' => 'https://example.com',
                'github' => 'https://github.com'
            ],
            [
                'title' => 'Blog CMS Platform',
                'featured' => false,
                'description' => 'Content management system with markdown editor, SEO tools, category management, comment moderation, and multi-author support.',
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop',
                'tags' => ['Laravel', 'PHP', 'MySQL', 'Tailwind CSS'],
                'demo' => 'https://example.com',
                'github' => 'https://github.com'
            ],
            [
                'title' => 'Business Portfolio Website',
                'featured' => false,
                'description' => 'Modern responsive business portfolio with contact form integration, service showcase, testimonials, and SEO optimization.',
                'image' => 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=600&auto=format&fit=crop',
                'tags' => ['WordPress', 'Elementor', 'PHP', 'CSS'],
                'demo' => 'https://example.com',
                'github' => 'https://github.com'
            ]
        ];

        // Pass ONLY projects to the view
        return view('home', compact('projects'));
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Save entry directly to MySQL database
        Contact::create($validated);

        // If submitted via JavaScript/AJAX
        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your message has been sent successfully.'
            ]);
        }

        // Standard Blade form redirection
        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}

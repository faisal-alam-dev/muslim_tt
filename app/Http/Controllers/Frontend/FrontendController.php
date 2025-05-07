<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Career;
use App\Models\Circular;
use App\Models\Client;
use App\Models\Enlistment;
use App\Models\Gallery;
use App\Models\OurContents;
use App\Models\OurTeam;
use App\Models\Package;
use App\Models\PackageConfirmation;
use App\Models\Publications;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\SuccessfulPortfolios;
use App\Models\User;
use App\Models\WhoWeAre;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class FrontendController extends Controller
{
    public function Index()
    {
        // For Home Slider
        $slider = Slider::where('status', 'active')->orderBy('id', 'desc')->get();

        // For Home About Us
        $about_us = AboutUs::where('id', 1)->latest()->get()->first();

        // For Home Packages
        $packages = Package::where('package_status', 'active')->orderBy('id', 'desc')->get();

        // For Home Blogs
        $blog = Blog::where('status', 'active')->latest()->take(3)->get();

        $services = Service::where('status', 'active')
            ->whereHas('serviceDetail.category', function ($q) {
                $q->where('name', 'home');
            })
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();

        $our_team = OurTeam::where('status', 'active')->orderBy('id', 'asc')->get();
        $top_level_team = $our_team
            ->filter(function ($item) {
                return $item->type == 'top_level';
            })
            ->sortByDesc('id');

        $client = Client::where('status', 'active')->orderBy('id', 'desc')->get();

        return view('frontend.index', compact('slider', 'about_us', 'packages', 'blog', 'services', 'our_team', 'top_level_team', 'client'));
    } // End Method

    public function AboutUs()
    {
        $about_us = AboutUs::where('id', 1)->latest()->get()->first();

        $our_mission = OurContents::where('id', 1)->latest()->get()->first();

        $our_vision = OurContents::where('id', 2)->latest()->get()->first();

        return view('frontend.pages.about_us.about_us', compact('about_us', 'our_mission', 'our_vision'));
    } // End Method

    public function BoardOfDirector()
    {
        $team = OurTeam::where('status', 'active')->orderBy('id', 'asc')->get();
        return view('frontend.pages.about_us.board_of_director', compact('team'));
    } // End Method

    public function BoardOfDirectorDetails($slug)
    {
        $team = OurTeam::where('slug', $slug)->first();
        return view('frontend.details.team_details', compact('team'));
    } // End Method

    public function PackageDetails($slug)
    {
        $package = Package::where('package_name_slug', $slug)->first();
        return view('frontend.details.package_details', compact('package'));
    } // End Method

    public function PackageConfirmation(Request $request)
    {
        // dd($request->all());

        $data = new PackageConfirmation();
        $data->package_id = $request->package_id;
        $data->user_name = $request->full_name;
        $data->user_phone = $request->phone;
        $data->user_email = $request->email;
        $data->user_message = $request->message;
        if ($request->file('nid_passport')) {
            $nid_passport = $request->file('nid_passport');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $nid_passport->getClientOriginalExtension();
            $image = $manager->read($nid_passport);
            // $image->resize(810, 504);
            $image->toJpeg(80)->save(public_path('uploads/packages/package_booking/' . $name_gen));
            $data->nid_passport = 'uploads/packages/package_booking/' . $name_gen;
        }
        // dd($data);
        $data->save();

        return view('frontend.confirmation.package_confirmation');
    } // End Method

    public function UmrahPackages()
    {
        $packages = Package::where('package_status', 'active')->where('package_type', 'umrah')->orderBy('id', 'desc')->get();
        return view('frontend.pages.umrah.umrah_packages', compact('packages'));
    } // End Method

    public function BenefitOfUmrah()
    {
        return view('frontend.pages.umrah.benefit_of_umrah');
    } // End Method

    public function HowToPerformUmrah()
    {
        return view('frontend.pages.umrah.how_to_perform_umrah');
    } // End Method

    public function UmrahVisaRequirement()
    {
        return view('frontend.pages.umrah.umrah_visa_requirement');
    } // End Method

    public function HajjPackages()
    {
        $packages = Package::where('package_status', 'active')->where('package_type', 'hajj')->orderBy('id', 'desc')->get();
        return view('frontend.pages.hajj.hajj_packages', compact('packages'));
    } // End Method

    public function HajjPreRegistration()
    {
        return view('frontend.pages.hajj.hajj_pre_registration');
    } // End Method

    public function HajjVisaRequirements()
    {
        return view('frontend.pages.hajj.hajj_visa_requirements');
    } // End Method

    public function TermsOfUse()
    {
        return view('frontend.pages.terms_of_use');
    } // End Method

    public function PrivacyPolicy()
    {
        return view('frontend.pages.privacy_policy');
    } // End Method

    public function BlogList()
    {
        $blog = Blog::where('status', 'active')->latest()->get();
        return view('frontend.pages.blog', compact('blog'));
    } // End Method

    public function BlogDetails($slug)
    {
        $blog_details = Blog::where('slug', $slug)->first();

        $blog = Blog::where('status', 'active')->latest()->get();

        return view('frontend.details.blog_details', compact('blog_details', 'blog'));
    } // End Method

    public function GuidelineInEnglish()
    {
        return view('frontend.pages.guidance.guideline_in_english');
    } // End Method

    public function GuidelineInBangla()
    {
        return view('frontend.pages.guidance.guideline_in_bangla');
    } // End Method

    public function VisaProcessing()
    {
        return view('frontend.pages.facilities.visa_processing');
    } // End Method

    public function HotelBooking()
    {
        return view('frontend.pages.facilities.hotel_booking');
    } // End Method

    public function ZiyaratTours()
    {
        return view('frontend.pages.facilities.ziyarat_tours');
    } // End Method

    public function AirTicketing()
    {
        return view('frontend.pages.facilities.air_ticketing');
    } // End Method

    public function UmrahTraining()
    {
        return view('frontend.pages.facilities.umrah_training');
    } // End Method

    public function ServiceDetails($slug)
    {
        $service_list = Service::where('status', 'active')->orderBy('title', 'asc')->get();
        $service = Service::where('slug', $slug)->first();
        return view('frontend.details.service_details', compact('service_list', 'service'));
    } // End Method

    public function AllServiceList()
    {
        $services = Service::where('status', 'active')->latest()->get();
        return view('frontend.pages.all_services', compact('services'));
    } // End Method

    // public function AboutUs()
    // {
    //     $about_us = AboutUs::where('id', 1)->latest()->get()->first();

    //     $about_message = AboutUs::where('id', 2)->latest()->get()->first();

    //     $team = OurTeam::where('status', 'active')->latest()->get();

    //     $top_level_team = $team->filter(function ($item) {
    //         return $item->type == 'top_level';
    //     });

    //     $student_level_team = $team
    //         ->filter(function ($item) {
    //             return $item->type == 'student_level';
    //         })
    //         ->sortBy('id');

    //     $our_mission = OurContents::where('id', 1)->latest()->get()->first();
    //     $our_vision = OurContents::where('id', 2)->latest()->get()->first();
    //     $shared_beliefs = OurContents::where('id', 3)->latest()->get()->first();
    //     $organizational_strength = OurContents::where('id', 4)->latest()->get()->first();
    //     $operational_strength = OurContents::where('id', 5)->latest()->get()->first();
    //     $commitment = OurContents::where('id', 6)->latest()->get()->first();

    //     return view('frontend.pages.about_us', compact('about_us', 'about_message', 'team', 'top_level_team', 'student_level_team', 'our_mission', 'our_vision', 'shared_beliefs', 'organizational_strength', 'operational_strength', 'commitment'));
    // } // End Method

    public function ImportantEnlistment()
    {
        $enlistment = Enlistment::latest()->get()->first();
        return view('frontend.pages.important_enlistment', compact('enlistment'));
    } // End Method

    public function Client()
    {
        $client = Client::where('status', 'active')->latest()->get();
        return view('frontend.pages.client', compact('client'));
    } // End Method

    public function Gallery()
    {
        $gallery = Gallery::where('status', 'active')->latest()->get();
        return view('frontend.pages.gallery', compact('gallery'));
    } // End Method

    public function GalleryDetails($slug)
    {
        $gallery = Gallery::findOrfail($slug);

        return view('frontend.details.gallery_details', compact('gallery'));
    } // End Method

    public function ContactUs()
    {
        $site_setting = Setting::first();
        return view('frontend.pages.contact_us', compact('site_setting'));
    } // End Method

    // public function BlogDetails($slug)
    // {
    //     $blog = Blog::where('slug', $slug)->first();
    //     $author = User::where('id', $blog->created_by)->first()->name;
    //     return view('frontend.details.blog_details', compact('blog', 'author'));
    // }

    public function TermsConditions()
    {
        return view('frontend.pages.terms_conditions');
    } // End Method

    // public function TeamList()
    // {
    //     $team = OurTeam::where('status', 'active')->orderBy('id', 'desc')->get();
    //     $top_level_team = $team->filter(function ($item) {
    //         return $item->type == 'top_level';
    //     });
    //     $middle_level_team = $team->filter(function ($item) {
    //         return $item->type == 'middle_level';
    //     });
    //     $student_level_team = $team->filter(function ($item) {
    //         return $item->type == 'student_level';
    //     });
    //     $team_founder = OurTeam::where('status', 'active')->where('type', 'founder')->get()->first();
    //     return view('frontend.pages.our_team', compact('team', 'top_level_team', 'middle_level_team', 'student_level_team', 'team_founder'));
    // } // End Method

    // public function TeamDetails($slug)
    // {
    //     $team = OurTeam::where('slug', $slug)->first();
    //     return view('frontend.details.team_details', compact('team'));
    // } // End Method

    public function Career()
    {
        $career = Career::where('status', 'active')->latest()->get();
        return view('frontend.pages.career', compact('career'));
    } // End Method

    public function CareerDetails($slug)
    {
        $job_application = Career::where('slug', $slug)->first();
        return view('frontend.details.job_details', compact('job_application'));
    } // End Method

    public function CareerDetailsApply($id)
    {
        $career_apply = Career::findOrFail($id);
        return view('frontend.pages.apply_for_career_by_id', compact('career_apply'));
    }

    public function CareerApply()
    {
        $career = Career::where('status', 'active')->latest()->get();
        return view('frontend.pages.apply_for_career', compact('career'));
    } // End Method

    public function showProfile()
    {
        $successful_portfolios = SuccessfulPortfolios::first();
        // dd($successful_portfolios);
        return view('frontend.pages.profile', compact('successful_portfolios'));
    }

    public function Publications()
    {
        $publications_data = Publications::latest()->get();
        return view('frontend.pages.publications', compact('publications_data'));
    } // End Method

    public function NoticeCircular()
    {
        $circular_data = Circular::latest()->get();
        return view('frontend.pages.circular', compact('circular_data'));
    } // End Method
}

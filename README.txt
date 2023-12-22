I have looked a brief, My Thought about the code is:
it is a OK code, the method is similar with the method I usually did, I often using repository to make my code more simple and easy to understand for new developer, and I felt the same experience when I looked in to the code, simple and easy to understand

however I will add some code to make it more simple in the Controller file

##BookingController line 27 public function __construct(BookingRepository $bookingRepository)

I usually using the Repository Interface / BookingRepositoryInterface that will describe first what method will be in any repository that implement the Interface method list, the BookingRepository will be bind with BookingRepositoryInterface in the repository provider file described in the function register

example:

public function register()
    {
      $this->app->bind(
          BookingRepositoryInterface::class,
          BookingRepository::class
      );
    }

by using this method in the future we could change this to other BookingRepository like staging BookingRepository, Firebase BookingRepository, etc. so that is what i have learned about the repository from the blog 

##BookingController line 36 public function index(Request $request)

I usually create a middleware for the user checking
hence in the function index we can remove some code and add calling the middleware $this->middleware('auth');

public function index(Request $request)
{
    $is_admin = $this->middleware('auth');
    $response = ($is_admin) ? $this->repository->getUsersJobs($user_id) : $this->repository->getAll($request);
    return response($response);
}

## BookingController line 187 public function distanceFeed
There're to many lines in the function distanceFeed we can move the code to the new BookingService file
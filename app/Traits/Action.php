<?php


namespace App\Traits;


use App\Models\Bookmark;
use App\Models\CaseModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

trait Action
{

    public $modelName;

    public $actions = ['like', 'dislike'];

    public function action($id, $act)
    {
        $this->ManualLogin();

        $this->isActionValid($act);

        $this->isCaseIdValid($id);

        $this->doAct($act, $id);

    }

    public function bookmarkedCount($id)
    {

        return Bookmark::query()
            ->where('bookmarkable_id', $id)
            ->where('bookmarkable_type', $this->modelName)
            ->count();
    }

    /**
     * @param $id
     */
    public function handleLike($id): void
    {
        $bookmark = [
            'bookmarkable_id' => $id,
            'bookmarkable_type' => CaseModel::class,
            'user_id' => Auth::id()
        ];


        if ($this->bookmarkedCount($id) < 1) {
            Bookmark::create($bookmark);
            dd('یا موفقیت لایکش کردی');
        } else
            dd('قبلا لایکش کرده بودی');
    }

    /**
     * @param $id
     */
    public function handleDisLike($id): void
    {
        if ($this->bookmarkedCount($id) > 0) {
            Bookmark::query()
                ->where('bookmarkable_id', $id)
                ->where('bookmarkable_type', CaseModel::class)
                ->delete();

            dd('یا موفقیت دیس لایکش کردی');
        } else
            dd('اصلا لایکش نکرده بودی');
    }

    /**
     * @param $id
     * @param $casesIds
     */
    public function isCaseIdValid($id): void
    {
        $casesIds = CaseModel::pluck('id');
        $casesIds = $casesIds->toArray();

        if (!in_array($id, $casesIds))
            dd('آیدی کیس در دیتابیس ما نیست');
    }

    /**
     * @param $act
     */
    public function isActionValid($act): void
    {
        if (!in_array($act, $this->actions))
            dd('your selected act is wrong');
    }

    public function ManualLogin(): void
    {
        $user = User::find(3);
        Auth::login($user);
    }

    /**
     * @param $act
     * @param $id
     */
    public function doAct($act, $id): void
    {
        if ($act == 'like')
            $this->handleLike($id);

        elseif ($act == 'dislike')
            $this->handleDisLike($id);
    }

}

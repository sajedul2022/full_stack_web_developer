import { Injectable } from '@angular/core'
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { catchError, tap, map } from 'rxjs/operators';
import { IAlbum } from '../model/album';

@Injectable({
providedIn: 'root'
})
export class AlbumService {
albums_url: string =
"https://jsonplaceholder.typicode.com/albums";
constructor(private _http: HttpClient) {}
}
